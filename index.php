    <?php
      include 'dbConnect.php';
      include 'analyticstracking.php';
    ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Point Entertainment Toronto</title>

    <!-- Bootstrap Core CSS -->
    <link href="style/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="style/grayscale.min.css" rel="stylesheet" type="text/css">

    <!-- Extra CSS -->
    <link href="style/pointStyle.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!--<?php
      //include 'socialMediaScript.php';
    ?>-->



    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class="light">Home</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#futureEvents">Future Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#previousEvents">Previous Events</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#djs">DJs</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#venues">Venues</a>
                    </li>

                     <li>
                        <a class="page-scroll" href="#partners">Partners</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#otherEvents">Other Events</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#socialMedia">Social Media</a>
                    </li>


                    <li>
                        <a class="page-scroll" href="#subscribe">Subscribe</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php
        include ('introHeader.php');
    ?>
  

    <?php

        include ('futureEvents.php');    
    ?>
   
   <?php
    include ('gallery.php');  
   ?>

      <?php
    include ('previousEvents.php');  
   ?>

    <?php
    include ('DJs.php');  
   ?>

    <?php
    include ('venues.php');  
   ?>

 <?php
   include ('partners.php');  
   ?>

    <?php
   include ('otherEvents.php');  
   ?>

     <?php
   include ('socialMedia.php');  
   ?>

  <?php
   include ('subscribe.php');  
   ?>
   


    <!-- Basic Template 
    <section id="lalala" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
            </div>
        </div>
    </section>-->





    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Us!</h2>
                <p>Feel free to contact us if you have any questions, if you are interested in one of our events, if you're interested in working with us, etc.</p>
            </div>

<div class="col-lg-8 col-lg-offset-2">

<p>Social media is the best way to get in contact with someone from Point Entertainment Toronto. You can also email <a href='mailto:'shayna@shaynak112.com?Subject=Point%Contact">shayna@shaynak112.com</a>.</p>

</div>
</div>
  

    </section>


  






    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Point Entertainment Toronto, 2017</p>
            <!--<p>Email: <a href='pointcontact@shaynak112.com?Subject=From%Point%Website' target="_top">pointcontact@shaynak112.com</a></p>-->
        </div>

    </footer>

    <!-- jQuery -->
 <script src="scripts/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="scripts/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="scripts/grayscale.min.js"></script>

    <!-- Extra JavaScript -->
    <script type='text/javascript' src="scripts/script.js"></script>
    
  

</body>

</html>
