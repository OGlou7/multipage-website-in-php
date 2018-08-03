<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';

$mail = new PHPMailer;

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  if(isset($_POST['button'])){
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

    // VALIDATION
    if ($san_pren === false) {
        $errors['prenom'] =  "Veuillez indiquer votre prenom.";
        }
    if ($san_nom === false) {
        $errors['nom'] =  "Veuillez indiquer votre nom.";
        }
    if ($san_mess === false) {
      $errors['message'] =  "Veuillez indiquer votre message.";
    }
    else {
      $mail->Body=$san_mess;
    }
    if ($san_email === false) {
      $errors['email'] =  "Veuillez indiquer votre email.";
    }
    else {
      $mail->setFrom=$san_email;
    }

      // EXECUTION
      if (count($errors)> 0){
      	echo 'Erreurs!';
      	print_r($errors);
      	exit;
      }

      // UPLOAD

      $handle = new upload($_FILES['document']);
      if ($handle->uploaded) {
        if ($handle->file_src_name_ext === 'png' || $handle->file_src_name_ext === 'jpg' ||$handle->file_src_name_ext === 'jpeg' || $handle->file_src_name_ext === 'gif') {
          $handle->process('../images');
          if ($handle->processed) {
            echo 'image resized';
            $handle->clean();
          }
          else {
            echo 'error : ' . $handle->error;
          }
        }
      }


    // SMTP MAIL

    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "becodetest@gmail.com";
    //Password to use for SMTP authentication
    $mail->Password = "motdepassebecode";
    //Set who the message is to be sent from
    $mail->setFrom('becodetest@gmail.com', 'becodetest bxl');
    //Set an alternative reply-to address
    $mail->addReplyTo('becodetest@gmail.com', 'becodetest bxl');
    //Set who the message is to be sent to
    $mail->addAddress('mlouiseogdoc@gmail.com', 'MLouise Ogdoc');
    //Set the subject line
    $mail->Subject = 'PHPMailer GMail SMTP test';

    //send the message, check for errors
    if (!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message sent!";
    }
  }
?>
