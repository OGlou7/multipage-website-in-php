<?php
include "test.php";

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
      Mot de passe: <input type="text" name="password"><br><br>
     <button type="submit" name="button">Contactez-nous</button> <br>

   </fieldset>
   </form>

    </body>

</html>
