<?php
     // form in php  
    if(isset($_POST["button"]))
    {
        $tittle = $_POST["Mr,Mme,Mlle"];//gets the choosen gender
        $fstName = $_POST["fstName"];//gets the entered first name 
        $lstName = $_POST["lstName"];//gets the entered last name 
        $subject = $_POST["subject"];//gets the subject 
        $msg = $_POST['message'];//gets the entered message
        $document = $_POST["document"];//gets the choosen doc
        $format = $_POST['format'];
    }
    // on initie un tableau qui va contenir toute erreur potentielle.
    $errors = array();

    // 1. Sanitisation

    $fstName = $_POST["fstName"];
    $fstNameFilt = filter_var($fstName, FILTER_SANITIZE_STRING);
    echo $fstName."<br>";
    $lstName = $_POST['lstName'];
    $lstNameFilt = filter_var($name, FILTER_SANITIZE_STRING);
    echo $name."<br>";
    $msg = $_POST['message'];
    $msgFilt = filter_var($msg, FILTER_SANITIZE_STRING);
    echo $msg."<br>";

    // 2. Validation
    
    if (false === filter_var($fstName, FILTER_VALIDATE_STRING))
    {
        $errors['fstName'] =  "Your first name please.";
    }

    if (false === filter_var($lstName, FILTER_VALIDATE_STRING)) 
    {
        $errors['lstName'] =  "Your last name please.";
    }

    if (false === filter_var($msg, FILTER_VALIDATE_STRING))
    {

        $errors['message'] =  "Type your message please.";

    }  
?>
  



