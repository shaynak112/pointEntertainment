 <!-- Previous Events -->
    <section id="previousEvents" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Previous Events</h2>
                <p>Some of our previous events include "Old School Tribal", "Tech House Bombs", and "Classics VS Techno". We have also been lucky enough to book some amazing headliners such as Agent Orange, Nick Bertossi, Durty Soxxx, Daniel Dubb, Mladen Tomic, Flipside, and Zentrix. Here are the flyers from a few of our past events.</p>
            </div>

        <?php

            $dbconn3 = new Dbconnect;
            $db3 = $dbconn3->getDb();
            $query3 = "SELECT * FROM event WHERE showOnPrevious = 'yes' ORDER BY id DESC";
            $statement3 = $db3->prepare($query3);
            $statement3->execute();
            $prevEvents = $statement3->fetchAll(PDO::FETCH_OBJ);

        ?>


        <?php

            $increment = 0;

            foreach($prevEvents as $g)
            {
                if($increment===0)
                {
                    ?>
                    <div class='row'>
                    <div class="col-lg-12">
                        <div class="col-lg-4" style='margin-top:15px;'>
                        <?php echo "<a class='previousFlyers' target='_blank' href='" . $g->facebookURL . "'> <img class='previousFlyers' src='eventViewerImg.php?id=" . $g->id . "'>";
                        ?>
                        </div>
                        <?php
                        $increment++;
                }
                elseif($increment%3===0)
                {
                    ?>
                    </div>
                    </div>
                    <div class='row'>
                    <div class="col-lg-12">
                        <div class="col-lg-4" style='margin-top:15px;'>
                        <?php echo "<a class='previousFlyers' target='_blank' href='" . $g->facebookURL . "'> <img class='previousFlyers' src='eventViewerImg.php?id=" . $g->id . "'>";
                        ?>
                        </div>
                        <?php
                        $increment++;
                }
                else
                {
                   ?>
                    <div class="col-lg-4" style='margin-top:15px;'>
                    <?php echo "<a class='previousFlyers' target='_blank' href='" . $g->facebookURL . "'> <img class='previousFlyers' src='eventViewerImg.php?id=" . $g->id . "'>";
                        ?>
                    </div>
                    <?php
                    $increment++; 
                }
            }

        ?>



            </div>
            </div>
            </div>

        
    </section>