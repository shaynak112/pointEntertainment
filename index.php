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
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#subscribe">Subscribe</a>
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
  <input id="phone" type="text" class="form-control" placeholder="Enter your phone here" name="phone"/>
</div>

<div>
<label class="control-label" for="message">Your message: </label>
  <input id="message" type="text" class="form-control" placeholder="Please enter your message" name="message"/>
</div>



  <input type="submit" class="btn btn-primary" value="Submit" name="Submit" id="submit">

  </form>

</div>
</div>
  


<?php

ini_set("SMTP","mail.voxwebtech.com");
ini_set("smtp_port","25");
ini_set('sendmail_from', 'testPoint@voxwebtech.com');

$from = "Sender <'testPoint@voxwebtech.com'>";
$to = "Point <'contactPoint@voxwebtech.com'>";
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
  //echo "Thank you, " . $contactName;
}

?>

<div>

<br/>

<p>Remember to keep up with us through social media! We're on <a href="https://www.facebook.com/pointentertainmenttoronto/" target="_blank">Facebook</a>, <a href="https://twitter.com/pointEntTO" target="_blank">Twitter</a>, and <a href="https://www.instagram.com/pointentto/" target="_blank">Instagram!</a></p>

</div>

    
    <div id="socialMedia">

      <ul id="socialLinks">
        <li><a href="https://www.facebook.com/pointentertainmenttoronto/ " target="_blank"><img src="contactUs/fb.jpg" id="facebook" class="social" alt="facebook link" title="facebook link"></a></li>
        <li><a href="https://twitter.com/pointEntTO" target="_blank"><img src="contactUs/twitter.jpg" id="twitter" class="social" alt="twitter link" title="twitter link"></a></li>
        <li><a href="https://www.instagram.com/pointentto/" target="_blank"><img src="contactUs/instagram.png" id="instagram" class="social" alt="instagram link" title="instagram link"></a></li>
      </ul>

    </div>  




    </section>


  
    <section id="subscribe" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Subscribe To Our NewsLetter</h2>
                <p>We will keep you up to date with the latest events as well as new music releases and chances to win FREE ENTRY for those exclusive on this list.</p>
            </div>
        </div>

<div class="row">
<div class="col-lg-8 col-lg-offset-2">
            <form name="subscribeForm" class="form-horizontal" method="post" action="">

<div>
<label class="control-label" for="firstName">First name: </label>
  <input id="firstName" class="form-control" type="text" placeholder="Enter your first name" name="firstName"/>
</div>

<div>
<label class="control-label" for="lastName">Last name: </label>
  <input id="lastName" class="form-control" type="text" placeholder="Enter your last name" name="lastName"/>
</div>

<div>
<label class="control-label" for="email">Your email: </label>
  <input id="email" type="text" class="form-control" placeholder="Enter your email" name="email"/>
</div>

<div>
<label class="control-label" for="phone">Your phone: </label>
  <input id="phone" type="text" class="form-control" placeholder="Enter your phone number (optional)" name="phone"/>
</div>

<br/>

  <input type="submit" class="btn btn-primary" value="Subscribe to Point's Newsletter" name="subscribePoint" id="subscribePoint"/>

  </form>




   

<?php

if(isset($_POST['subscribePoint']))
{
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $conn = new Dbconnect;
  $db = $conn->getDb();

  $query = "INSERT INTO subscribe (firstName, lastName, email, phone, subscribe) VALUES (:firstName, :lastName, :email, :phone, 'subscribed')";

    $statement = $db->prepare($query);

      $statement->bindValue(':firstName', $firstName, PDO::PARAM_STR);
      $statement->bindValue(':lastName', $lastName, PDO::PARAM_STR);
      $statement->bindValue(':email', $email, PDO::PARAM_STR);
      $statement->bindValue(':phone', $phone, PDO::PARAM_STR);

      $statement->execute();

      echo "<div>";

      echo "Thank you, {$firstName}, for joining our newsletter.";
      echo "</div>";

}




?>

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
