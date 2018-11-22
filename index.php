<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Point Entertainment</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->

<?php

  include 'dbConnect.php';
  include 'nav.php';
  
?>



  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <h2>Point Entertainment</h2>
    </div>

    <div class="product-screens">

      <div class="col-lg-12 col-md-12">
        <img src="logo.jpg" alt="" style='width:10%;margin-left:0%;'>
      </div>
     

    </div>

  </section><!-- #intro -->

  <main id="main">

<?php

  include 'aboutEvents.php';
  include 'gallery.php';
  include 'previousEvents.php';
  include 'socialMedia.php';
  include 'detailsContactSubscribe.php';
  
?>

 



  </main>

<?php

  include 'footer.php';

?>

  