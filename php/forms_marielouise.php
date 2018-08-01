<?php
    if(isset($_POST["button"])){
     @$gender = $_POST["gender"];
     @$prenom = $_POST["prenom"];
     @$nom = $_POST["nom"];
     @$objet = $_POST["objet"];
     @$message = $_POST['message'];
     @$document = $_POST["document"];
     @$format = $_POST['format'];
     @$email = $_POST ['email'];
    }

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
