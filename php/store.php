<?php
include "form-logs.php";

 ?>
<!-- le contenu de la page Contact -->
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Association Belge Paralysées</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" href="../scss/_store.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/abp-logo.png" alt="logo">
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">Qui sommes nous?</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Activités et Loisirs</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class=" text-center rounded" id="forms">
              <!-- FORMULAIRE  -->
             <form class="" action="store.php" method="post">
             <fieldset>
               <legend>CONTACT</legend>
               <input type="radio" name="gender" value="monsieur">Monsieur
               <input type="radio" name="gender" value="madame">Madame<br><br>
               Nom: <input id="textinput" name="nom" type="text" placeholder="nom" class="form-control input-md">
               Prenom: <input id="textinput" name="prenom" type="text" placeholder="prenom" class="form-control input-md"><br><br>
               Objet:<br><select name="objet" size="1">
                 <option value="information">Information</option>
                 <option value="benevolat">Benevolat</option>
                 <option value="donation">Donation</option>
                 <option value="autre">Autre</option>
               </select><br><br>
               Message:<textarea class="form-control" id="textarea" name="message" placeholder="message"></textarea><br><br>
               Documents:<br><input id="filebutton" name="filedoc" class="input-file" type="file" size="32"><br><br>
               Format de réponse souhaité <input type="radio" name="format" value="html">HTML
               <input type="radio" name="format" value="texte">Texte<br><br>
               E-mail: <input id="textinput" name="email" type="text" placeholder="adresse email" class="form-control input-md">
               Mot de passe: <input id="passwordinput" name="password" type="password" placeholder="mot de passe" class="form-control input-md"><br><br>
               <button id="singlebutton" name="button" class="btn-default" type="submit">Contactez-nous</button><br>
             </fieldset>
             </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/help.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Nous avons besion de VOUS!</span>
                </h2>
                <p>Les activités mensuelles et les camps de vacances reposent sur l’aide bénévoles des personnes responsables et des aidants mais également de l'aide financielle.
                Ces jeunes et moins jeunes apportent leur aide aux personnes handicapées et leur permettent de vivre des moments de détente et de rencontres, ainsi que des activités qui sortent parfois de l’ordinaire !
                Vous aussi vous pouvez participer aux activités de l’ABP en tant que bénévole et nous soutenir financiellement.
                Pour soutenir nos activités contactez-nous en remplissant ce formulaire pour plus de details.
              </p>


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; 2018 - Fait par <a target="_blank" href="https://github.com/OGlou7">Marie Louse</a> & <a target="_blank" href="https://github.com/MarianeNiwe">Mariane</a> @ <a target="_blank" href="https://becode.org"> Formation BeCode </a></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
