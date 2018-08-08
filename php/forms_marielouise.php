<?php

error_reporting(E_ALL);
   ini_set('display_errors', 1);
   $button_submit = $_POST['button-submit'];
  if($_POST['button']){
    $errors = array();
    //SANITIZE
    $prenom = $_POST['prenom'];
    $san_pren = filter_var($prenom, FILTER_SANITIZE_STRING);
    echo $prenom."<br>";

    $nom = $_POST['nom'];
    $san_nom = filter_var($nom, FILTER_SANITIZE_STRING);
    echo $nom."<br>";

    $message = $_POST['message'];
    $san_mess = filter_var($message, FILTER_SANITIZE_STRING);
    echo $message."<br>";

    $email = $_POST['email'];
    $san_email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email."<br>";
  }
    //VALIDATION
    if (false === filter_var($prenom, FILTER_VALIDATE_STRING)) {
        $errors['prenom'] =  "Veuillez indiquer votre prenom.";
        }
    if (false === filter_var($nom, FILTER_VALIDATE_STRING)) {
        $errors['nom'] =  "Veuillez indiquer votre nom.";
        }
    if (false === filter_var($message, FILTER_VALIDATE_STRING)) {
    $errors['message'] =  "Veuillez indiquer votre message.";
      }
    if (false === filter_var($message, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] =  "Veuillez indiquer votre email.";
      }

    // EXECUTION
    if (count($errors)> 0){
    	echo 'Erreurs!';
    	print_r($errors);
    	exit;
    }

      // UPLOAD

    $uploaddir = 'uploads/';

    $uploadfile = $uploaddir . basename($_FILES['document']['nom']);
    echo '<pre>';
    if (move_uploaded_file($_FILES['document']['tmp_nom'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
    } else {
    echo "Error!\n";
    }
    var_dump($_FILES);
    print "</pre>";




    //SMTP MAIL
    use PHPMailer\PHPMailer\PHPMailer;
    require '../vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "username@gmail.com";
    //Password to use for SMTP authentication
    $mail->Password = "yourpassword";
    //Set who the message is to be sent from
    $mail->setFrom('from@example.com', 'First Last');
    //Set an alternative reply-to address
    $mail->addReplyTo('replyto@example.com', 'First Last');
    //Set who the message is to be sent to
    $mail->addAddress('whoto@example.com', 'John Doe');
    //Set the subject line
    $mail->Subject = 'PHPMailer GMail SMTP test';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';
    //Attach an image file
    $mail->addAttachment('images/phpmailer_mini.png');
    //send the message, check for errors
    if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message sent!";
    }
    function save_mail($mail)
    {
      //You can change 'Sent Mail' to any other folder or tag
      $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
      //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
      $imapStream = imap_open($path, $mail->Username, $mail->Password);
      $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
      imap_close($imapStream);
      return $result;

?>

<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/style.css">
    <title></title>
  </head>
  <body>
    <!-- FORMULAIRE  -->
    <form class="" action="forms_marielouise.php" method="post">
      <fieldset>
        <legend>CONTACT</legend>
        <input type="radio" name="gender" value="monsieur">Monsieur
        <input type="radio" name="gender" value="madame">Madame<br><br>
        Nom: <input type="text" name="nom"> <br><br>
        Prenom: <input type="text" name="prenom"><br><br>
        Objet: <select name="objet" size="1">
          <option value="information">Information</option>
          <option value="benevolat">Benevolat</option>
          <option value="donation">Donation</option>
          <option value="autre">Autre</option>
        </select><br><br>
        Message: <textarea name="message" rows="5" cols="40"></textarea><br><br>
        Documents: <input type="file" name="document"><br><br>
        Format de réponse souhaité <input type="radio" name="format" value="html">HTML
        <input type="radio" name="format" value="texte">Texte<br><br>
          E-mail: <input type="text" name="email"><br><br>
          Mot de passe: <input type="text" name="password"><br>
        <button type="submit" name="button">Contactez-nous</button> <br>
      </fieldset>
    </form>



      <!-- envoi d'une image via cette classe externe php upload -->

     <!-- la fonction mail() de php étant trop basique, utilise une class externe pour mail -->

     <!-- toujours pour l'envoi de l'email, utilise un serveur SMTP gratuit comme gmail (utilisez votre propre compte) -->


     <!-- Validation :
     limiter l'upload uniquement aux formats d'images les plus courants (jpg, jpeg, png, gif)
     obliger le minimum pour pouvoir répondre : email + message -->




  </body>
</html>
