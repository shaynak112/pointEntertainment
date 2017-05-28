 <!-- Future Events -->
    <section id="futureEvents" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12">
                <h2>Future Events</h2>

                <div class='col-lg-6'>

                    <h2>Friday Nights at Sound Xchange</h2>

    <p>Friday nights at Sound Xchange are dedicated to both bringing in international talent as well as showcasing the incredible talent we are lucky enough to have in Toronto.</p>

    

<div class="newEventsInfo" id="newEventsInfo1">

                <h2>May 19, Zentrix</h2>

                <div class="newEventsDiv" id="newEvents5">
                    <a href="https://www.facebook.com/events/162796244250896/" target="_blank">
                    <img class ="newEventsImg" style='width:80%;' src="futureEvents/event01.jpg"></a>
                </div> <!--end of img div-->


                <p>May 19 at Sound Xchange - Zentrix! Many talented DJs also spinning techno/psychedelic sounds. Check the <a href="https://www.facebook.com/events/162796244250896/" target="_blank">Facebook event page.</a></p>
                <p>Accompanied by the talented Ron Jon, Mythrophan (birthday!), Son Ral, Kachamacha, Ticky Ty, Thien, and TwistedDimension. Deco by Neuromantix.</p>
                

            <div class="futureForm">

                <form id="formEvent1" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="name1">Name (first and last)</label>
                <input class="form-control" type="text" name="name1" id="name1"></div>

                <div><label class="control-label formEventClass" for="guests1">Number of Guests</label>
                <input class="form-control" type="text" name="guests1" id="guests1"></div>
                
                <div><label class="control-label FormEventClass" for="email1">Email Address</label>
                <input type="text" class="form-control" name="email1" id="email1"></div>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitEvent1" name="submitEvent1" value="Submit"/>

                </form> 

                <br/>
                <br/>

                <div id='twittershare2'>
                <a
            href="http://twitter.com/share?text=Zentrix&url=https://www.facebook.com/events/162796244250896/" target="_blank" title="Click to post to Twitter"><img src="twitterShare.png"></a>
            </div>

             <br/>
              <br/>

                <div class="fb-share-button" data-href="https://www.facebook.com/events/162796244250896/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fevents%2F162796244250896%2F&amp;src=sdkpreparse">Share Event</a></div>

    <br/>
     <br/>
            

            </div> 

            
            <?php
                ini_set("SMTP","mail.shaynak112.com");
                ini_set("smtp_port","25");
                ini_set('sendmail_from', 'pointsendgl@shaynak112.com');

                $from = "Sender <pointsendgl@shaynak112.com>";
                $to = "Point <guestlist@shaynak112.com>";


                if(isset($_POST['submitEvent1']))
                {
                  $subject = "Guestlist for May 19 Zentrix";
                  $glName = $_POST['name1'];
                  $glEmail = $_POST['email1'];
                  $glGuests = $_POST['guests1'];
                  $message = $glName . " at " . $glEmail . " would like to be added to the guestlist with " . $glGuests . " guests.";
                  mail($to,$subject,$message,$from);
                  echo "Thank you, {$glName}, looking forward to seeing you!";
                }
            ?>


        </div> <!--end of new event 1 div-->

                </div>


                <div class='col-lg-6'>


                    <h2>Comedown Sundays and Therapy Thursdays</h2>

                    <h3>Comedown Sundays</h3>

                    <p>Comedown Sundays is the after AFTER party. Starting in March, it's a series of events held on Sundays, 11 AM - 5 PM (bar in full services and sometimes hours will vary due to other events in the city, etc.) at Sound Xchange. Artists will feature some of the best talent in the city and will be based on proper musical progression and flow (and there may even be a surprise or two in the future with international guests).</p>
                    <p>As well, most of the time, cover is $15 BUT .... $10 on guestlist OR $5 if you have a Comfort Zone bracelet.</p>

                    <div id="comedownform">

            <form id="formComedownGeneral" class="form-horizontal"action="" method="post">

            <div><label class="control-label" for="nameComedown">Name (first and last)</label>
            <input type="text" class="form-control" name="nameComedown" id="nameComedown"></div>

            <div><label class="control-label" for="guestsComedown">Number of Guests</label>
            <input type="text" class="form-control" name="guestsComedown" id="guestsComedown"></div>
            
            <div><label class="control-label" for="emailComedown">Email Address</label>
            <input type="text" class="form-control" name="emailComedown" id="emailComedown"></div>

            <input type="submit" class="btn btn-primary" id="submitComedown05" name="submitComedown05" value="Submit"/>

        </form> 

        <?php


            ini_set("SMTP","mail.shaynak112.com");
            ini_set("smtp_port","25");
            ini_set('sendmail_from', 'pointsendgl@shaynak112.com');

            $from = "Sender <pointsendgl@shaynak112.com>";
            $to = "Point <guestlist@shaynak112.com>";

            $host = "shaynak112.shaynak112.com";


            if(isset($_POST['submitComedown05']))
            {
              $subject = "Guestlist for the next comedown";
              $glName = $_POST['nameComedown'];
              $glEmail = $_POST['emailComedown'];
              $glGuests = $_POST['guestsComedown'];
              $message = $glName . " at " . $glEmail . " would like to be added to the guestlist with " . $glGuests . "guests.";
              mail($to,$subject,$message,$from);
              echo "Thanks, " . $glName;
            } 
            
        ?>
            </div>
            <br/>
            <br/>

            <h3>Therapy Thursdays</h3>

        <p>House and Techno have a new home on Thursdays! Expect bouncy house, techno, tribal... it's all about the music so there will be a unique sound each Thursday! Located at Sound Xchange (421 Dundas Street West, second floor). $5 cover and $5 drinks until 12 AM. Some DJs who regularly spin on Thursday nights include Quim, Manolo, Ticky Ty, Kotsy, and Billey Barry. Add yourself to the next guestlist below:</p>


        <div id="thursdayForm">

            <form id="formThursdayGeneral" class="form-horizontal" action="" method="post">

            <div><label class="control-label" for="nameThursday">Name (first and last)</label>
            <input type="text" class="form-control" name="nameThursday" id="nameThursday"></div>

            <div><label class="control-label" for="guestsThursday">Number of Guests</label>
            <input type="text" class="form-control" name="guestsThursday" id="guestsThursday"></div>
            
            <div><label class="control-label" for="emailThursday">Email Address</label>
            <input type="text" class="form-control" name="emailThursday" id="emailThursday"></div>

            <input type="submit" class="btn btn-primary" id="submitThursdayGeneral" name="submitThursdayGeneral" value="Submit"/>

        </form> 

<?php


    ini_set("SMTP","mail.shaynak112.com");
    ini_set("smtp_port","25");
    ini_set('sendmail_from', 'pointsendgl@shaynak112.com');

    $from = "Sender <pointsendgl@shaynak112.com>";
    $to = "Point <guestlist@shaynak112.com>";

    $host = "shaynak112.shaynak112.com";


    if(isset($_POST['submitThursdayGeneral']))
    {
      $subject = "Guestlist for the next Therapy Thursday";
      $glName = $_POST['nameThursday'];
      $glEmail = $_POST['emailThursday'];
      $glGuests = $_POST['guestsThursday'];
      $message = $glName . " at " . $glEmail . " would like to be added to the guestlist with " . $glGuests . "guests.";
      mail($to,$subject,$message,$from);
      echo "Thanks, " . $glName;
    } 
    
?>
    </div>


                </div>
                
            </div>
        </div>
    </section>