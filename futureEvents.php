 <!-- Future Events -->
    <section id="futureEvents" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12">
                <h2>Future Events</h2>

                <div class='col-lg-6'>

                <div id='leftEventOne' >

                   <!-- <h3>VS Night at Populus - June 17</h3>

                    <div class="newEventsDiv" id="newEvents5">
                    <a href="https://www.facebook.com/events/349728165430244/" target="_blank">
                    <img class ="newEventsImg" style='width:80%;' src="home/eventVS.jpg"></a>
                </div> end of img div

                <br/>

                        <div>
                            <div>Welcome to our VS night! Saturday June 17 at Populus (471 Richmond Street West), doors at 10 PM</div>
                            <ul style='list-style: none;'>
                            <li>****Jayforce VS Quim****</li>
                            <li>***Random Doug VS Thien***</li>
                            <li>**Brian Moar VS Hunnter**</li>
                            <li>*Shea VS Mukk*</li>
                            </ul>
                            4 decks / 2 mixers
                            <br/>
                            <div>Check the <a href="https://www.facebook.com/events/349728165430244/" target="_blank">Facebook event page.</a> ... 
                            $10 on guestlist ($15 not on GL or after midnight) so make sure you get on the guestlist! Add yourself below.</div>
                        </div>

                <div class="futureForm">

                <form id="formEvent1" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="name1">Name (first and last)</label>
                <input class="form-control" type="text" name="name1" id="name1"></div>

                <div><label class="control-label formEventClass" for="guests1">Number of Guests</label>
                <input class="form-control" type="text" name="guests1" id="guests1"></div>
                
                <div><label class="control-label FormEventClass" for="email1">Email Address</label>
                <input type="text" class="form-control" name="email1" id="email1"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitEvent1" name="submitEvent1" value="Add To Guestlist"/>

                </form> 

                </div>end form div

            <div id='twittershare2'>
                <a
            href="http://twitter.com/share?text=VSNight&url=https://www.facebook.com/events/349728165430244/" target="_blank" title="Click to post to Twitter"><img src="twitterShare.png"></a>
            </div>

             <br/>
              

                <div class="fb-share-button" data-href="https://www.facebook.com/events/349728165430244/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fevents%2F162796244250896%2F&amp;src=sdkpreparse">Share Event</a></div>


                 <?php/*
                ini_set("SMTP","mail.shaynak112.com");
                ini_set("smtp_port","25");
                ini_set('sendmail_from', 'pointsendgl@shaynak112.com');

                $from = "Sender <pointsendgl@shaynak112.com>";
                $to = "Point <guestlist@shaynak112.com>";


                if(isset($_POST['submitEvent1']))
                {
                  $subject = "Guestlist for June 27 VS Night";
                  $glName = $_POST['name1'];
                  $glEmail = $_POST['email1'];
                  $glGuests = $_POST['guests1'];
                  $message = $glName . " at " . $glEmail . " would like to be added to the guestlist with " . $glGuests . " guests.";
                  mail($to,$subject,$message,$from);
                  echo "<br/>";
                  echo "Thank you, {$glName}, looking forward to seeing you!";

                $dbconn = new Dbconnect;
                $db = $dbconn->getDb();
                $query = "INSERT INTO guestlist (eventID, promoter, guestName, plus, email) VALUES(28, 'PET', :glName, :glGuests, :glEmail)";
                $statement = $db->prepare($query);
                $statement->bindValue(':glName', $glName, PDO::PARAM_STR);
                $statement->bindValue(':glGuests', $glGuests, PDO::PARAM_INT);
                $statement->bindValue(':glEmail', $glEmail, PDO::PARAM_STR);
                $statement->execute();

                }*/
            ?>

            </div>end event 1 on left side-->
    

                <div id='leftEventTwo'>

                    <br/>
                    <br/>

                    <h3>Vinyl Classic Night - July 15</h3>

                    <div class="newEventsDiv" id="newEvents4">
                    <a href="https://www.facebook.com/events/1404843436239827/" target="_blank">
                    <img class ="newEventsImg" style='width:80%;' src="home/eventVinylClassic.jpg"></a>
                </div> <!--end of img div-->

                <br/>

                        <div>
                            <div>**** VINYL CLASSICS NIGHT ****</div>
                            <br/>
                            <div>Just like the way it used to be - the old days, the timeless tracks of years ago (yes, vocal!), house, techno, and everything in between.</div>
                            <br/>
                            <div>With Toronto heroes: Deko-ze, Joee Cons, Peter Zurub, and Ticky Ty</div>
                            <div>Saturday July 15 at Populus (471 Richmond Street West), doors at 10 PM</div>
                            <br/>
                            <div>Come experience a magical night and get lost in the music, rediscovering the gems that packed the dancefloor years ago. NOT a night to be missed.</div>
                            <div>Facebook event page is <a href="https://www.facebook.com/events/1404843436239827/" target="_blank">HERE.</a> $20 on guestlist, guestlist closes at 12, so add yourself to the guestlist below!</div>
                        </div>




                <div class="futureForm">

                <form id="formEvent2" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="name2">Name (first and last)</label>
                <input class="form-control" type="text" name="name2" id="name2"></div>

                <div><label class="control-label formEventClass" for="guests2">Number of Guests</label>
                <input class="form-control" type="text" name="guests2" id="guests2"></div>
                
                <div><label class="control-label FormEventClass" for="email2">Email Address</label>
                <input type="text" class="form-control" name="email2" id="email2"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitEvent2" name="submitEvent2" value="Add To Guestlist"/>

                </form> 

                </div><!--end form div-->

            <div id='twittershare3'>
                <a
            href="http://twitter.com/share?text=VinylClassics&url=https://www.facebook.com/events/1404843436239827/" target="_blank" title="Click to post to Twitter"><img src="twitterShare.png"></a>
            </div>

             <br/>
              

                <div class="fb-share-button" data-href="https://www.facebook.com/events/1404843436239827/" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fevents%2F162796244250896%2F&amp;src=sdkpreparse">Share Event</a></div>


                 <?php
                #ini_set("SMTP","mail.shaynak112.com");
                #ini_set("smtp_port","25");
                #ini_set('sendmail_from', 'pointsendgl@shaynak112.com');

                #$from = "Sender <pointsendgl@shaynak112.com>";
                #$to = "Point <guestlist@shaynak112.com>";


                if(isset($_POST['submitEvent2']))
                {
                  $subject = "Guestlist for July 15 Vinyl Classics Night";
                  $glName = $_POST['name2'];
                  $glEmail = $_POST['email2'];
                  $glGuests = $_POST['guests2'];
                  $message = $glName . " at " . $glEmail . " would like to be added to the guestlist with " . $glGuests . " guests.";
                  #mail($to,$subject,$message,$from);
                  #echo "<br/>";
                  #echo "Thank you, {$glName}, looking forward to seeing you!";

                $dbconn1 = new Dbconnect;
                $db1 = $dbconn1->getDb();
                $query1 = "INSERT INTO guestlist (eventID, promoter, guestName, plus, email) VALUES(30, 'PET', :glName, :glGuests, :glEmail)";
                $statement1 = $db1->prepare($query1);
                $statement1->bindValue(':glName', $glName, PDO::PARAM_STR);
                $statement1->bindValue(':glGuests', $glGuests, PDO::PARAM_INT);
                $statement1->bindValue(':glEmail', $glEmail, PDO::PARAM_STR);
                $statement1->execute();
                }
            ?>

            </div><!--end event 2 on left side-->

        </div><!--end left side div-->
        </div>





                <div class='col-lg-6'>

                <!--<div id='coyuDiv'>

                    <h3>Coyu at One Loft - June 24</h3>

                    <div class="newEventsDiv">
                    <a href="https://www.facebook.com/events/1126444524128111/" target="_blank">
                    <img class ="newEventsImg" style='width:80%;' src="home/eventCoyu.jpg"></a>
                    </div> end of img div

                    <div id='CoyuInfo'>
                        <br/>
                        <div>Saturday June 24, Coyu at One Loft!</div>
                        <br/>
                        <div>Coyu, Christina Cruise, Audio and Chip, and Vaxx</div>
                        <br/>
                        <div>Advance tickets available <a href='https://www.eventbrite.ca/e/coyu-x-bnkr-june-24-tickets-35027096990?aff=Shay' target='_blank'> here!!</a>, early birds are only $20, prices will increase closer to the date and, of course, more at the door, so buy your ticket early!</div>
                        <br/>
                        <div>Doors at 10 PM, venue is One Loft (292 College Street West). Facebook event page is <a href='https://www.facebook.com/events/1126444524128111/' target='_blank'> here</a> for additional information.</div>
                        <div>Hosted by <a href='https://www.facebook.com/bnkrevents/' target='_blank'>BNKR</a> with Point Entertainment in full support.</div>
                        <br/>
                        <div>Don't miss out, make sure you have added yourself to the guestlist!! You can do so with the form below or contact <a href='https://www.facebook.com/shaynak112' target='_blank'>Shayna</a> or by email at <a href="mailto:shayna@shaynak112.com" target='_blank'>shayna@shaynak112.com</a></div>
                        <br/>

                    </div>end coyuinfo div


                <div class="futureForm">

                <form id="formCoyu" class="form-horizontal" action="" method="post">

                <div><label class="control-label formEventClass" for="name3">Name (first and last)</label>
                <input class="form-control" type="text" name="name3" id="name3"></div>

                <div><label class="control-label formEventClass" for="guests3">Number of Guests</label>
                <input class="form-control" type="text" name="guests3" id="guests3"></div>
                
                <div><label class="control-label FormEventClass" for="email3">Email Address</label>
                <input type="text" class="form-control" name="email3" id="email3"></div>

                <br/>

                <input type="submit" class="btn btn-primary" class="submitEvent" id="submitCoyu" name="submitCoyu" value="Add To Guestlist"/>

                </form> 

                </div>end form div

                <div class='socialMediaShare'>
                    <div class='twitterShare'>
                    <a
                href="http://twitter.com/share?text=Coyu&url=https://www.eventbrite.ca/e/coyu-x-bnkr-june-24-tickets-35027096990?aff=Shay" target="_blank" title="Click to post to Twitter"><img src="twitterShare.png"></a>
                </div>

                 <br/>
                  

                    <div class="fb-share-button" data-href="https://www.eventbrite.ca/e/coyu-x-bnkr-june-24-tickets-35027096990?aff=Shay" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fevents%2F162796244250896%2F&amp;src=sdkpreparse">Share Event</a></div>
                </div>end socialmedia share

                   

        <?php
        /*

            ini_set("SMTP","mail.shaynak112.com");
            ini_set("smtp_port","25");
            ini_set('sendmail_from', 'pointsendgl@shaynak112.com');

            $from = "Sender <pointsendgl@shaynak112.com>";
            $to = "Point <shayna@shaynak112.com>";

            $host = "shaynak112.shaynak112.com";


            if(isset($_POST['submitCoyu']))
            {
              $subject = "Guestlist for Coyu";
              $glName = $_POST['name3'];
              $glEmail = $_POST['email3'];
              $glGuests = $_POST['guests3'];
              $message = $glName . " at " . $glEmail . " would like to be added to the guestlist with " . $glGuests . "guests.";
              mail($to,$subject,$message,$from);
              echo "<br/>";
              echo "Thanks, " . $glName;
            } */
            
        ?>


            </div> end coyuDiv-->

            <br/>
            <br/>

            <div id='thursdayDiv'>

            <h3>Supporting Events</h3>
            <div>

            <a href='https://www.facebook.com/events/236287733548875/'><img src='previousEvents/aug7EINina.jpg' target="_blank" style='width:80%;margin-left:10%;'/></a>

            <p>Point Entertainment is fully supporting Electric Island's Civic Day Event with Nina Kraviz, Kink, and many more. Check with <a href='https://www.facebook.com/alexandra.esposito.12' target="_blank">Lexy</a> to see if she has any hard tickets available.</p>

            </div>

            <h3>Therapy Thursdays</h3>

        
        <div>House and Techno have a new home on Thursdays! Expect bouncy house, techno, tribal... it's all about the music so there will be a unique sound each Thursday!</div>
        <br/>
        <div>Located at Sound Xchange (421 Dundas Street West, second floor). $5 cover and $5 drinks until 12 AM. Some DJs who regularly spin on Thursday nights include Quim, Manolo, Ticky Ty, Kotsy, Billey Barry, and Thien. Add yourself to the next guestlist below:</div>
        <br/>


        <div id="thursdayForm">

            <form id="formThursdayGeneral" class="form-horizontal" action="" method="post">

            <div><label class="control-label" for="nameThursday">Name (first and last)</label>
            <input type="text" class="form-control" name="nameThursday" id="nameThursday"></div>

            <div><label class="control-label" for="guestsThursday">Number of Guests</label>
            <input type="text" class="form-control" name="guestsThursday" id="guestsThursday"></div>
            
            <div><label class="control-label" for="emailThursday">Email Address</label>
            <input type="text" class="form-control" name="emailThursday" id="emailThursday"></div>

            <br/>

            <input type="submit" class="btn btn-primary" id="submitThursdayGeneral" name="submitThursdayGeneral" value="Add To Guestlistt"/>

        </form> 

        </div> <!--end Thursday form div-->



               <!-- <div class='socialMediaShare'>
                    <div class='twitterShare'>
                    <a
                href="http://twitter.com/share?text=Coyu&url=https://www.eventbrite.ca/e/coyu-x-bnkr-june-24-tickets-35027096990?aff=Shay" target="_blank" title="Click to post to Twitter"><img src="twitterShare.png"></a>
                </div>

                 <br/>
                  

                    <div class="fb-share-button" data-href="https://www.eventbrite.ca/e/coyu-x-bnkr-june-24-tickets-35027096990?aff=Shay" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fevents%2F162796244250896%2F&amp;src=sdkpreparse">Share Event</a></div>
                </div> end socialmedia share-->


        <?php


            #ini_set("SMTP","mail.shaynak112.com");
            #ini_set("smtp_port","25");
            #ini_set('sendmail_from', 'pointsendgl@shaynak112.com');

            #$from = "Sender <pointsendgl@shaynak112.com>";
            #$to = "Point <guestlist@shaynak112.com>";

            #$host = "shaynak112.shaynak112.com";


            if(isset($_POST['submitThursdayGeneral']))
            {
              $subject = "Guestlist for the next Therapy Thursday";
              $glName = $_POST['nameThursday'];
              $glEmail = $_POST['emailThursday'];
              $glGuests = $_POST['guestsThursday'];
              $message = $glName . " at " . $glEmail . " would like to be added to the guestlist with " . $glGuests . "guests.";
              #mail($to,$subject,$message,$from);
              #echo "<br/>";
              #echo "Thanks, " . $glName;
            } 
            
        ?>
    
        </div><!--end Thursday div-->

                </div>
                
            </div>
        </div>
    </section>