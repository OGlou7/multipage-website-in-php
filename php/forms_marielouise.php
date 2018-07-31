<?php
  if(isset($_POST["button"])){
   @$gender = $_POST["gender"];
   @$prenom = $_POST["prenom"];
   @$nom = $_POST["nom"];
   @$objet = $_POST["objet"];
   @$message = $_POST['message'];
   @$document = $_POST["document"];
   @$format = $_POST['format'];
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


?>
