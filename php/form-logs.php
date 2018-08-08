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
          echo 'Erreur!';
          echo $email;
          print_r($errors);
          exit;
      }

    // SMTP MAIL

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "becodetest@gmail.com";
    include "password.php";
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
  $file = file_get_contents('./logs.txt', true);
  $file = rtrim(trim($file), ',');
  $file = '[' . $file . ']';
  $logs = json_decode($file, true);
  var_dump($logs);
  foreach ($logs as $key => $value) {
    echo '<pre>';
    echo $logs[$key][date('l d/m/y')];
    echo '<br>';
    echo $logs[$key]['heure'];
    echo '<br>';
    echo $logs[$key]['nom'];
    echo '<br>';
    echo $logs[$key]['prenom'];
    echo '<br>';
    echo $logs[$key]['email'];
    echo '<br>';
    echo $logs[$key]['format'];
    echo '</pre>';
  }


}




?>
