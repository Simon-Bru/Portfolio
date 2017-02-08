<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name="description" content="Simon Bruguerolle, développeur">
    <meta name="keywords" content="Web, Développement, Site, Programmeur, PHP, Javascript, CSS, Html, Application, Ingénieur">
    <meta name="author" content="Simon Bruguerolle">
    <!--  Tell Browser Website Is Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Jquery Inclusion -->
    <script src="js/jquery-2.2.3.min.js"></script>

    <!-- CSS inclusion -->
    <link rel="stylesheet" type = "text/css" href = "css/style2.css"/>

    <!--=====================================  Materialize Minified CSS ================================================-->
    <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection" type="text/css">

    <!--=====================================  Material Icons Link ================================================-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font awesome Inclusion -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <title>Simon Bruguerolle</title>

  </head>

      <?php
      session_start();

      if($_SESSION == null){
        include('land.php');
        $_SESSION['visited'] = true;
      }
      ?>

  <body>

    <header>
      <nav class="teal darken-1">
        <div class="nav-wrapper">
          <a class="brand-logo" href="#">
            <b>Simon Bruguerolle</b>
          </a>
          <a href="#" data-activates="mobile_menu" class="button-collapse"><i class="material-icons">menu</i></a>

          <ul class="right hide-on-med-and-down" id="menu">
            <li id="home" class="center tooltipped" data-position="bottom" data-delay="50" data-tooltip="Présentation"><a href="index.php"><i class="material-icons">home</i></a></li>
            <li id="parcours" class="center tooltipped" data-position="bottom" data-delay="50" data-tooltip="Parcours"><a href="parcours.php"><i class="material-icons">school</i></a></li>
            <li id="portfolio" class="center tooltipped" data-position="bottom" data-delay="50" data-tooltip="Portfolio"><a href="portfolio.php"><i class="material-icons">polymer</i></a></li>
            <li id="cv" class="center tooltipped" data-position="bottom" data-delay="50" data-tooltip="CV"><a href="cv.php"><i class="material-icons">person_pin</i></a></li>
            <li id="contact" class="center tooltipped" data-position="bottom" data-delay="50" data-tooltip="Contact"><a href="contact.php"><i class="material-icons">email</i></a></li>
          </ul>

          <ul class="side-nav" id="mobile_menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="parcours.php">Parcours</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="cv.php">CV</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>

        </div>
      </nav>
    </header>
