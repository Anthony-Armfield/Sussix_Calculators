<?php
/**
 * Created by PhpStorm.
 * User: tarmfield
 * Date: 9/13/2018
 * Time: 10:36 PM
 */
define("ROOT", __DIR__ ."/");
define("HTTP", ($_SERVER["SERVER_NAME"] == "localhost")
    ? "http://localhost/tonyarmfield/sussix_calcs/"
    : "http://www.w3expressions.com/tonyarmfield/sussix_calcs/"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sussix Creative Calculators</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php print HTTP; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php print HTTP; ?>css/business-frontpage.css" rel="stylesheet">

    <script type="text/javascript" src="<?php print HTTP; ?>js/externalJS.js"></script>
    <script type="text/javascript" src="<?php print HTTP; ?>js/date.js"></script>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Sussix Creative Calculators</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php print HTTP; ?>index.php">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php print HTTP; ?>about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php print HTTP; ?>calcs.php">Calculators</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php print HTTP; ?>faq.php">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php print HTTP; ?>contact.php">Contact Us</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link" href="<?php print HTTP; ?>admin/index.php">Admin Page</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>