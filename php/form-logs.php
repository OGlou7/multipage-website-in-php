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

    $nom = $_POST['nom'];
    $san_nom = filter_var($nom, FILTER_SANITIZE_STRING);

    @$objet = $_POST['objet'];

    $message = $_POST['message'];
    $san_mess = filter_var($message, FILTER_SANITIZE_STRING);

    @$format = $_POST['format'];

    $email = $_POST['email'];
    $san_email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $password = $_POST['password'];
    $san_pass = filter_var($password, FILTER_SANITIZE_STRING);

    // VALIDATION

    if ($san_pren === false || $prenom == '') {
        $errors['prenom'] =  "Veuillez indiquer votre prenom.";
      }else {
      $errors['prenom'] = "";
      }
    if ($san_nom === false || $nom == '') {
        $errors['nom'] =  "Veuillez indiquer votre nom.";
      }else {
      $errors['nom'] = "";
      }
    if ($san_mess === false || $message == '') {
      $errors['message'] =  "Veuillez indiquer votre message.";
    }
      else {
      $errors['message'] = "";
      $mail->Body=$san_mess;
    }
    if ($san_email === false || $email == '') {
      $errors['email'] =  "Veuillez indiquer votre email.";
    }
    else {
      $errors['email'] = "";
      $mail->setFrom( $san_email, '');
    }
    if (!preg_match("/([w-]+@[w-]+.[w-]+)/",$email)) {
      $errors['email'] = "Format de l'email Incorrect, veuillez indiquer votre email.";
    }


      // EXECUTION


    // SMTP MAIL

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "becodetest@gmail.com";
    if(file_exist("password.php")){
      include "password.php";
    }else {
    $mail->Password=$san_pass;
    }
    //Set an alternative reply-to address
    $mail->addReplyTo('becodetest@gmail.com', 'becodetest bxl');
    //Set who the message is to be sent to
    $mail->addAddress('mlouiseogdoc@gmail.com', '');
    //Add CC
    $mail->AddCC('becodetest@gmail.com');
    //Set the subject line
    $mail->Subject = 'PHPMailer GMail SMTP test';

    //send the message, check for errors
    if (!$mail->send()) {
      echo "Mailer Error: ";
    } else {
      echo "Message sent!";
    }


    // UPLOAD

    $handle = new upload($_FILES['image_field']);
    if ($handle->uploaded) {
      if ($handle->file_src_name_ext === 'png' || $handle->file_src_name_ext === 'jpg' ||$handle->file_src_name_ext === 'jpeg' || $handle->file_src_name_ext === 'gif') {
        $handle->process('./images');
        if ($handle->processed) {
          echo 'image resized';
          $handle->clean();
        }
        else {
          echo 'error : ' . $handle->error;
        }
      }
    }
    // MESSAGE HTML or TEXT
  $msg_txt = $message;
  $msg_html = "<html><head></head><body>" .$message. "</body></html>";

  //>>>READ FICHIER.TXT <<<
  $monfichier = file_get_contents('fichier.txt');

    // >>>>>>>>>ADD TEXT<<<<<<<<<<<<<
  $monfichier .= 'add test log atom';
  $add = "test add log";
    // <<<<<REPLACE FICHIER>>>>>>>
  file_put_contents("fichier.txt",$monfichier);
  // OU
    // <<<<<<< ADD in fichier>>>>
  file_put_contents("fichier.txt",$add, FILE_APPEND);

  //MENTION TO USER
  $file = 'logs.txt';
  $date = new DateTime();
  $date = $date->format('Y-m-d H:i:s');
  $texte = $date .$prenom. ' ' .$nom. 'EMAIL :  ' .$email. 'MESSAGE: '.$message.'IMAGE: ci-joint.';
  file_put_contents($file, $texte, FILE_APPEND);
}




?>
