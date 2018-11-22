<section id="detailsContactSubscribe" class="section-bg">
      <div class="container">

        <div class="section-header">
          
        </div>

        <div class="row">

          <!--<div class="col-lg-4 col-md-6">
            <div class="box wow fadeInLeft">
              <h3>Details</h3>

              <p>Additional details</p>
              <p>Etc etc</p>

            </div>
          </div>-->

          <div class="col-lg-6 col-md-6">
            <div class="box featured wow fadeInUp">
              <h3>Contact</h3>

               <div>

                <form name="contactForm" class="form-horizontal" method="post" action="">

<div>
<label class="control-label" for="name">Name: </label>
  <input id="name" class="form-control" type="text" placeholder="Enter your name" name="name"/>
</div>

<div>
<label class="control-label" for="email">Email: </label>
  <input id="email" class="form-control" type="text" placeholder="Enter your email address" name="email"/>
</div>

<div>
<label class="control-label" for="message">Message: </label>
  <input id="message" type="text" class="form-control" placeholder="Write your message" name="message"/>
</div>

<br/>

  <input type="submit" class="btn btn-primary" value="Contact Us" name="contactPoint" id="contactPoint"/>

  </form>

  <?php

        ini_set("SMTP","mail.point-entertainment.com");
        ini_set("smtp_port","25");
        ini_set('sendmail_from', 'point@point-entertainment.com');

        $from = "Sender <point@point-entertainment.com>";
        $to = "Contact <contact@point-entertainment.com>";
        $subject = "Message from Point Contact Page";

        $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);    

    if(isset($_POST["contactPoint"]))
        {
          
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $fullMessage = "A message from " . $name . " at " . $email . ". The message is: " . $message;
        mail($to,$subject,$fullMessage,$from);

        echo "<br/><div style='color:white;'>Message sent, thank you.</div><br/>";

        }

        

?>

<p>Email: <a href='mailto:contact@point-entertainment.com'>contact@point-entertainment.com</a></p>


              </div>


            
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="box wow fadeInRight">
              <h3>Subscribe</h3>


              <div>

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

<br/>

  <input type="submit" class="btn btn-primary" value="Subscribe to Point's Newsletter" name="subscribePointNews" id="subscribePointNews"/>

  </form>


<?php


    if(isset($_POST["subscribePointNews"]))
        {
          
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];



  $conn = new Dbconnect;
  $db = $conn->getDb();

  $query = "INSERT INTO subscription (subsFirstName, subsLastName, subsEmail, subsActive) VALUES (:firstName, :lastName, :email, 'yes')";

    $statement = $db->prepare($query);

      $statement->bindValue(':firstName', $firstName, PDO::PARAM_STR);
      $statement->bindValue(':lastName', $lastName, PDO::PARAM_STR);
      $statement->bindValue(':email', $email, PDO::PARAM_STR);

      $statement->execute();

      echo "<div>";

      echo "Thank you, {$firstName}, for joining our newsletter.";
      echo "</div>";

        }

        

?>



              </div>

            </div>
          </div>

        </div>
      </div>
    </section>