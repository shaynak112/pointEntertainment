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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- Extra CSS -->
    <link href="pointStyle.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your-app-id',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
   


           

            

          


        <!-- Partners -->
    <section id="partners" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Partners</h2>
                <p>Point works with many people, groups, etc. around the city so we wanted to just mentioned a few of those who we often work with. These are listed in no specific order. There are so many amazing people and groups in our community so some may be missed but we wanted to list a few that have really helped us as Point Entertainment.</p>

                <ul style='text-align:left;'>
                    <li><a href="https://www.facebook.com/soundspectrumto/" target="_blank">Sound Spectrum</a></li>

                    <li><a href="https://www.facebook.com/kotsyphoto/" target="_blank">Christopher Kotsy of Kotsy Photography</a></li>

                    <li><a href="https://www.facebook.com/AcidRP/" target="_blank">Acid Reign Productions</a></li>

                    <li><a href="https://www.facebook.com/BlacklightBeatsTV/" target="_blank">Blacklight Beats TV</a></li>

                    <li><a href="https://www.facebook.com/ShaktiCollective/" target="_blank">Shakti Collective</a></li>
                    
                    <li><a href="https://www.facebook.com/derinkuyu.ca/" target="_blank">John Mitchell of Derinkuyu</a></li>
                    
                    <li><a href="https://www.facebook.com/architexturescollective/" target="_blank">Architextures</a></li>

                    <li><a href="https://www.facebook.com/OngakuEntertainment/" target="_blank">Ongaku Entertainment</a></li>


                </ul>
            </div>
        </div>
    </section>


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


<form name="contactform" class="form-horizontal" method="post" action="">

<div>
<label class="control-label" for="yourName">Your name: </label>
  <input id="yourName" class="form-control" type="text" placeholder="Enter your name here" name="yourName"/>
</div>

<div>
<label class="control-label" for="email">Your email: </label>
  <input id="email" type="text" class="form-control" placeholder="Enter your email here" name="email"/>
</div>

<div>
<label class="control-label" for="phone">Your phone: </label>
  <input id="email" type="text" class="form-control" placeholder="Enter your phone here" name="phone"/>
</div>


<label class="control-label" for="message">Your message: </label></div>
<div>
  <textarea id="message" class="form-control" placeholder="Please enter your message" name="message"></textarea>
</div>

  <input type="submit" class="btn btn-primary" value="Submit" name="Submit" id="submit">

  </form>


  

<?php

ini_set("SMTP","mail.shaynak112.com");
ini_set("smtp_port","25");
ini_set('sendmail_from', 'pointsendgl@shaynak112.com');

$from = "Sender <pointsendgl@shaynak112.com>";
$to = "Point <pointcontact@shaynak112.com>";
$subject = "Point Contact";

$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);

if(isset($_POST['Submit']))
{
  $contactName = $_POST['yourName'];
  $contactEmail = $_POST['email'];
  $contactPhone = $_POST['phone'];
  $contactBody = $_POST['message'];
  $message = "A message from " . $contactName . " at " . $contactEmail . " and " . $contactPhone . " The message is:     " . $contactBody;
  mail($to,$subject,$message,$from);
  echo "Thank you, " . $contactName;
}
/*else
{
  $contactName = "nothing";
  $contactEmail = "nothing";
  $contactPhone = "nothing";
  $contactBody = "nothing";
  $message = "unsuccessful";
  //mail($to,$subject,$message,$from);
}*/


?>

<div>

<br/>

<p>Remember to keep up with us through social media! We're on <a href="https://www.facebook.com/pointentertainmenttoronto/" target="_blank">Facebook</a>, <a href="https://twitter.com/dj_thien" target="_blank">Twitter</a>, and <a href="https://www.instagram.com/shaynak112/" target="_blank">Instagram!</a></p>

    

    
    <div id="socialMedia">

      <ul id="socialLinks">
        <li><a href="https://www.facebook.com/pointentertainmenttoronto/ " target="_blank"><img src="contactUs/fb.jpg" id="facebook" class="social" alt="facebook link" title="facebook link"></a></li>
        <li><a href="https://twitter.com/dj_thien" target="_blank"><img src="contactUs/twitter.jpg" id="twitter" class="social" alt="twitter link" title="twitter link"></a></li>
        <li><a href="https://www.instagram.com/shaynak112/" target="_blank"><img src="contactUs/instagram.png" id="instagram" class="social" alt="instagram link" title="instagram link"></a></li>
      </ul>

    </div>  


</div>

    </section>

    

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Point Entertainment Toronto, 2017</p>
            <p>Email: <a href='pointcontact@shaynak112.com?Subject=From%Point%Website' target="_top">pointcontact@shaynak112.com</a></p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

    <!-- Extra JavaScript -->
    <script type='text/javascript' src="gallery/script.js"></script>
    <script type='text/javascript' src="djs/script.js"></script>

</body>

</html>
