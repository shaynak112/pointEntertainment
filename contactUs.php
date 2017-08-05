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
<br/>

  <input type="submit" class="btn btn-primary" value="Submit" name="contactPoint" id="contactPoint">

  </form>

</div>
</div>
  


<?php

if(isset($_POST['contactPoint']))
{

ini_set("SMTP","mail.voxwebtech.com");
ini_set("smtp_port","25");
ini_set('sendmail_from', 'testPoint@voxwebtech.com');

$from = "Sender <'testPoint@voxwebtech.com'>";
$to = "Point <'contactPoint@voxwebtech.com'>";
$subject = "Point Contact";

$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); /*headers or header*/


  $contactName = $_POST['yourName'];
  $contactEmail = $_POST['email'];
  $contactPhone = $_POST['phone'];
  $contactBody = $_POST['message'];
  $message = "A message from " . $contactName . " at " . $contactEmail . " and " . $contactPhone . " The message is:     " . $contactBody;
  mail($to,$subject,$message,$from);
  echo "Thank you, " . $contactName;
}

?>






    </section>
