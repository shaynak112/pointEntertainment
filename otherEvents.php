 <!-- Other Events -->
    <section id="otherEvents" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Other Events</h2>
                <p>There are so many other amazing events in the city; if you are heading out, check out one of these events!</p>


        <?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM otherEvents ORDER BY date ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $otherEvents = $statement->fetchAll(PDO::FETCH_OBJ);

        ?>


                <ul style="list-style:none;">

                <?php

                    foreach($otherEvents as $p)
                    {
                        echo "<li>";
                        echo "<a href='" . $p->facebookURL . "' target='_blank'>" . $p->eventName . "</a>" . " on " . $p->date . " at " . $p->venue . ". Cover: " . $p->cover . " featuring DJs " . $p->DJs . "<br/>";
                        echo "</li>";
                    }

                ?>

                </ul>



            </div>
        </div>
    </section>