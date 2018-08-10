<?php
include "form-logs.php";

 ?>
<!-- le contenu de la page Contact -->
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A belgian association of paralyzed ">
    <meta name="author" content="">

    <title>Association Belge des Paralysés</title>

    <!-- Bootstrap core CSS -->
    <link href="../template/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/business-casual.min.css" rel="stylesheet">
    <link href="../assets/css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets//scss/_store.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <!-- Manifest			 -->
    <link rel="manifest" href="../manifest.json"/>
  </head>

  <body>

    <!-- header and navigation -->
    <?php
      include("header.php");
    ?>

    <!-- end header and navigation -->

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class=" text-center rounded" id="forms">
              <!-- FORMULAIRE  -->
             <form class="" action="store.php" method="post" enctype="multipart/form-data">
             <fieldset>
               <legend><strong>CONTACT</strong></legend>
               <input type="radio" name="gender" value="monsieur"><strong>Monsieur</strong>
               <input type="radio" name="gender" value="madame"><strong>Madame</strong><br><br>
               <strong>Nom: </strong><?php if(isset($_POST['button'])){echo $errors['nom'];} ?><br><input id="textinput" name="nom" type="text" placeholder="nom" class="form-control input-md"><br>
               <strong>Prenom: </strong> <?php if(isset($_POST['button'])){echo $errors['prenom'];} ?><br><input id="textinput" name="prenom" type="text" placeholder="prenom" class="form-control input-md"><br><br>
               <strong>Objet:</strong><br><select name="objet" size="1">
                 <option value="information"><strong>Information</strong></option>
                 <option value="benevolat"><strong>Benevolat</strong></option>
                 <option value="donation"><strong>Donation</strong></option>
                 <option value="autre"><strong>Autre</strong></option>
               </select><br><br>
               <strong>Message: </strong><?php if(isset($_POST['button'])){echo $errors['message'];} ?><br><textarea class="form-control" id="textarea" name="message" placeholder="message"></textarea><br><br>
               <strong>Documents:</strong><br><input id="filebutton" name="image_field" class="input-file" type="file" size="32"><br><br>
               <strong>Format de réponse souhaité </strong><input type="radio" name="format" value="html"><strong>HTML</strong>
               <input type="radio" name="format" value="texte"><strong>Texte</strong><br><br>
               <strong>E-mail: </strong><?php if(isset($_POST['button'])){echo $errors['email'];} ?><br><input id="textinput" name="email" type="text" placeholder="adresse email" class="form-control input-md"><br>
               <strong>Mot de passe: </strong><input id="passwordinput" name="password" type="password" placeholder="mot de passe" class="form-control input-md"><br><br>
               <button id="singlebutton" name="button" class="btn-default" type="submit"><strong>Contactez-nous</strong></button><br>
             </fieldset>
             </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../assets/img/help.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Nous avons besion de VOUS!</span>
                </h2>
                <p>Les activités mensuelles et les camps de vacances reposent sur l’aide bénévole des personnes responsables et des aidants mais également sur l'aide financielle.

                Ces jeunes et moins jeunes apportent leur aide aux personnes handicapées et leur permettent de vivre des moments de détente et de rencontres, ainsi que des activités qui sortent parfois de l’ordinaire !
                Vous aussi vous pouvez participer aux activités de l’ABP en tant que bénévole et nous soutenir financiellement.
                Pour soutenir nos activités ou pour une autre question nous concernant, contactez-nous en remplissant ce formulaire pour plus de details.
              </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- footer -->
    <?php
      include ("footer.php");
    ?>
    <!-- end footer -->


    <!-- Bootstrap core JavaScript -->
    <script src="../template/jquery/jquery.min.js"></script>
    <script src="../template/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src='../app.js'></script>

  </body>

</html>
