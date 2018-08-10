
<!-- C'est le contenu de la page Accueil -->
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A belgian association of paralyzed ">
    <meta name="author" content="">

    <title>Association Belge des Paralysés</title>

    <!-- Bootstrap core CSS -->
    <link href="./php/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/css/business-casual.min.css" rel="stylesheet">
    <link href="./assets/css/business-casual.css" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <!-- Manifest			 -->
    <link rel="manifest" href="./manifest.json"/>

  </head>

  <body>
  <!-- header and navigation -->
  <h1 class="site-heading text-center text-white d-none d-lg-block">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="./assets/img/abp-logo.png" alt="logo">
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
            <a class="nav-link text-uppercase text-expanded" href="./index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="./php/about.php">Qui sommes nous?</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="./php/products.php">Activités et Loisirs</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="./php/store.php">Contact</a>
           </li>
         </ul>
      </div>
    </div>
  </nav>

  <!-- end header and navigation -->

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="./assets/img/intro.jpg" style="width:400px; height:400px;" alt="intro">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Aide moi à agir seul!</span>
            </h2>
            <p class="mb-3">Les besoins de tous les paralysés, sans distinction de la maladie qui est à l’origine de leurs maux, sans distinction de leur âge ou de leur situation sociale, se résument en un seul : Etre utile. Souhait inconscient souvent, mais combien profond,
              que celui d’aider les autres, de gagner sa vie, d’être source de joie et non plus de peines et de soucis
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Notre mission</span>
              </h2>
              <p class="mb-0">L'objet social de l'association est de promouvoir l'intégration sociale et/ou professionnelle des personnes qui, de naissance ou à la suite d'une maladie ou d'un accident, sont atteintes de la perte ou de la diminution de leur mobilité.
              A cette fin, l'association prêtera son assistance à ces personnes pour leur permettre d'assumer leur existence dans la plus grande indépendance possible.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <?php
    include ("./php/footer.php");
    ?>
    <!-- end footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="./php/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src='./app.js'></script>

  </body>

</html>
