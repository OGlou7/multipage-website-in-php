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

<!DOCTYPE html>
 <html lang="" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./assets/style.css">
        <title></title>
    </head>
    <body>
        <form class="" action="contact.php" method="post">
            <fieldset>
                <legend>CONTACT</legend>
                <input type="radio" name="gender" value="monsieur">Monsieur
                <input type="radio" name="gender" value="madame">Madame<br><br>
                Nom: <input type="text" name="nom"> <br><br>
                Prenom: <input type="text" name="prenom"><br><br>
                Objet: 
                <select name="objet" size="1">
                    <option value="information">Information</option>
                    <option value="benevolat">Benevolat</option>
                    <option value="donation">Donation</option>
                    <option value="autre">Autre</option>
                </select><br><br>
                Message: <textarea name="message" rows="5" cols="40"></textarea><br><br>
                Documents: <input type="file" name="document"><br><br>
                Format de réponse souhaité <input type="radio" name="format" value="html">HTML
                <input type="radio" name="format" value="texte">Texte<br><br>
                <button type="submit" name="button">Contactez-nous</button> <br>
            </fieldset>
        </form>
    </body>
 </html>

  



