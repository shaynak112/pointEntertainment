 <!-- Other Events -->
    <section id="otherEvents" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Other Events</h2>
                <p>There are so many other amazing events in the city; if you are heading out, check out one of these events!</p>


        <?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM otherEvents WHERE status='upcoming' ORDER BY date ASC ";
            $statement = $db->prepare($query);
            $statement->execute();
            $otherEvents = $statement->fetchAll(PDO::FETCH_OBJ);

        ?>




                <?php

                    foreach($otherEvents as $p)
                    {

                        echo "<h4 style='margin-bottom:0px;'>" . $p->eventName . "</h4>";
                        echo "<div><a href='" . $p->facebookURL . "'>More Info</a></div>";
                        echo "<div>Date: " . $p->date . " at " . $p->venue . "</div>";
                        echo "<div>Cover: " . $p->cover . " featuring DJs: " . $p->DJs . "</div>";
                        echo "<br/>";
                        echo "<br/>";
                    }

                ?>


            </div>
        </div>
    </section>