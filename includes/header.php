<?php
  //print_r($_SERVER);
  //echo($_SERVER['PHP_SELF']);
  $convert=explode('/',$_SERVER['PHP_SELF']);
  //print_r($convert);
  $page=$convert[count($convert)-1];
  //echo $page;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kiddos</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="py-2 bg-primary">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md-5 pr-4 d-flex topper align-items-center">
                <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center">
                  <span class="icon-map"></span>
                </div>
                <span class="text">198 West 21th Street, Suite 721 New York NY 10016</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center">
                  <span class="icon-paper-plane"></span>
                </div>
                <span class="text">
                  <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e891879d9a8d85898184a88d85898184c68b8785">[email&#160;protected]</a>
                </span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center">
                  <span class="icon-phone2"></span>
                </div>
                <span class="text">+ 1235 2355 98</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
      <div class="container d-flex align-items-center">
        <a class="navbar-brand" href="index.php">Kiddos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($page=='index.php'){echo 'active';} ?>">
              <a href="index.php" class="nav-link pl-0">Home</a>
            </li>
            <li class="nav-item <?php if($page=='about.php'){echo 'active';} ?>">
              <a href="about.php" class="nav-link">About</a>
            </li>
            <li class="nav-item <?php if($page=='teacher.php'){echo 'active';} ?>">
              <a href="teacher.php" class="nav-link">Teacher</a>
            </li>
            <li class="nav-item <?php if($page=='courses.php'){echo 'active';} ?>">
              <a href="courses.php" class="nav-link">Courses</a>
            </li>
            <li class="nav-item <?php if($page=='blog.php'){echo 'active';} ?>">
              <a href="blog.php" class="nav-link">Blog</a>
            </li>
            <li class="nav-item <?php if($page=='contact.php'){echo 'active';} ?>">
              <a href="contact.php" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
