<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mailheader = "From: '.$name' <'.$email.'>\r\n";

$recipient = "alexsashkou91@gmail.com";

if(!empty($_POST['website'])) die();

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

echo'


<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="description" content="Stoyan Sarovs personal portfolio">
  <meta name="keywords" content="HTML, CSS, Personal, Portfolio, Page, Mobile, ">
  <meta name="author" content="Stoyan Sarov">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="css/styles.css">

  <!--JavaScript-->
  <script src="index.js"></script>

  <title>Stoyan Sarovs Portfolio</title>
</head>
<body>

<!-- Intro -->
<section id="intro">
  <div class="container-fluid background">
    <video src="images/bg.mp4" autoplay playsinline muted id="bgVideo"></video>
  <div class="container">

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
    <div class="container">
      <a href="index.html" class="navbar-brand">
        <img src="images/logo.png" alt="logo" id="logo" class="img-fluid" width="100">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapsdata-bs-target="#navmenu" id="btn1">
        <span class="navbar-dark navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav mx-auto ms-auto text-center">
            <li class="nav-item">
              <a class="nav-link" href="https://sarovportfolio.netlify.app/#intro" onclick="close_offcanvas()">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://sarovportfolio.netlify.app/#social" onclick="close_offcanvas()">SOCIAL MEDIA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://sarovportfolio.netlify.app/#projects" onclick="close_offcanvas()">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://sarovportfolio.netlify.app/#about" onclick="close_offcanvas()">ABOUT ME</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" onclick="close_offcanvas()" data-bs-toggle="modadata-bs-target="#contactModal">CONTACT ME</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>

  <!--Email message response-->
  <div class="container d-flex justify-content-center align-items-center text-center" id="emailResponse">
    <h1>Thank you for contacting me! I will get back to you as soon as possible! <br><br>
    <a href="index.html" id="back">Go back to the homepage</a></h1>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>


';


?>