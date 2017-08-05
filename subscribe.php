<!--subscribe to newsletter or unsubscribe-->

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

  <input type="submit" class="btn btn-primary" value="Subscribe to Point's Newsletter" name="subscribePointNews" id="subscribePointNews"/>

  </form>



<?php

if(isset($_POST['subscribePointNews']))
{

  /*if email is already in there*/

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


<br/>
<br/>

<h4>Unsubscribe</h4>

<p>If you would no longer like to be part of the mailing list, please enter your email here and you will be removed.</p>

<div class="row">
<div class="col-lg-6 col-lg-offset-3">
    <form name="unSubscribe" class="form-horizontal" method="post" action="">

<div>
<label class="control-label" for="email">Email: </label>
  <input id="email" type="text" class="form-control" placeholder="Enter your email" name="email"/>
</div>

<br/>

  <input type="submit" class="btn btn-primary" value="Unsubscribe" name="unsubscribePoint" id="unsubscribePoint"/>


</form>





<?php

if(isset($_POST['unsubscribePoint']))
{

  /*should have an alert or confirmation, maybe JS alert popup*/
  /*could send an email confirming that the email has been removed*/
  /*today's date*/

  $email = $_POST['email'];

  $conn = new Dbconnect;
  $db = $conn->getDb();

  //$today = date("yyyy-mm-dd hh:mm:ss");
  //echo $today;
  

  $query = "UPDATE subscribe SET subscribe='unsubscribed' WHERE email='$email'";

  //$query = "DELETE FROM subscribe WHERE email = $email";

    $statement = $db->prepare($query);

      $statement->bindValue(':email', $email, PDO::PARAM_STR);
      //$statement->bindValue(':today', $today, PDO::PARAM_STR);

      $statement->execute();

      echo "<div>";



      
      //yyy-mm-dd hh:mm:ss
      //subscribe = unsubscribed

      echo "You have been removed from the list. If this was done in error, please contact re-add yourself to the list.";
      echo "</div>";

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

</div>
</div>

     
    </section>