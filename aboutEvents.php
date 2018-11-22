<section id="aboutEvents" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
         

        </div>

        <div class="row">

          <div class="col-lg-2 about-img wow fadeInLeft">
          </div>

          <div class="col-lg-3 about-img wow fadeInLeft">
                       <h2>About Us</h2>
                       <span class="section-divider"></span>

                       <p>Love of music. Putting on events with the best in Toronto's scene.</p>

                       <ul>
                        <li>techno</li>
                        <li>tech-house</li>
                        <li>tribal</li>
                        <li>deep house</li>
                        <li>psytrance</li>
                       </ul>

                       <p>Events featuring local DJs as well as international DJs since 2014.</p>

                       <p>International DJs such as Mladen Tomic, Nick Bertossi, Agent Orange, and more</p>

                       <p>Local DJs such as Flipside, Deko-ze, Jayforce, Joee Cons, Quim, Ticky Ty, El Duran, Random Doug, Peter Zurub, Miz Megs</p>

                       <p>Working with others in the local scene such as Sound Xchange, Quim, Dekoze, Aluna, Mentis, DBR, Dragon's Fire, Bunker, Gaia</p>

                       <p>Hosted events at Fly, Bunker, Club 120, Sound Xchange, Populus (previously Toika), Li'ly Lounge</p>
          </div>

          <div class="col-lg-7 content wow fadeInRight">
            <h2>Previous Events</h2>
            <span class="section-divider"></span>


            <?php


    



  $conn = new Dbconnect;
  $db = $conn->getDb();

  $query = "SELECT * FROM events ORDER BY eventDate DESC LIMIT 2";

  $statement = $db->prepare($query);
            $statement->execute();
            $allEvents = $statement->fetchAll(PDO::FETCH_OBJ);



                    foreach($allEvents as $p)
                    {

                        echo "<h4 style='margin-bottom:0px;'>" . $p->eventName . "</h4>";
                        echo "<div><a href='" . $p->eventFacebook . "'>More Info</a></div>";
                        echo "<div>Date: " . $p->eventDate . " at " . $p->eventVenue . "</div>";
                        echo "<div><img src='" . $p->eventImage . "' style='width:50%;'></div>";
                        echo "<br/>";
                        echo "<br/>";
                    }


        

        

?>




          </div>

          <div class="col-lg-2 about-img wow fadeInLeft">
          </div>




        </div>

      </div>
    </section><!-- #about -->