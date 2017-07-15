 <!-- Partners -->
    <section id="partners" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Partners</h2>
                <p>Point works with many people, groups, etc. around the city so we wanted to just mentioned a few of those who we often work with. These are listed in no specific order. There are so many amazing people and groups in our community so some may be missed but we wanted to list a few that have really helped us as Point Entertainment.</p>


        <?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM partners ORDER BY partnerName ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $partners = $statement->fetchAll(PDO::FETCH_OBJ);

        ?>


                <ul style="list-style:none;">

                <?php

                    foreach($partners as $p)
                    {
                        echo "<li>";
                        echo "<a href='" . $p->partnerURL . "' target='_blank'>" . $p->partnerName . "</a>";
                        echo "</li>";
                    }

                ?>

                </ul>


                  <!--  <li><a href="https://www.facebook.com/soundspectrumto/" target="_blank">Sound Spectrum</a></li>

                    <li><a href="https://www.facebook.com/kotsyphoto/" target="_blank">Christopher Kotsy of Kotsy Photography</a></li>

                    <li><a href="https://www.facebook.com/AcidRP/" target="_blank">Acid Reign Productions</a></li>

                    <li><a href="https://www.facebook.com/BlacklightBeatsTV/" target="_blank">Blacklight Beats TV</a></li>

                    <li><a href="https://www.facebook.com/ShaktiCollective/" target="_blank">Shakti Collective</a></li>
                    
                    <li><a href="https://www.facebook.com/derinkuyu.ca/" target="_blank">John Mitchell of Derinkuyu</a></li>
                    
                    <li><a href="https://www.facebook.com/architexturescollective/" target="_blank">Architextures</a></li>

                    <li><a href="https://www.facebook.com/OngakuEntertainment/" target="_blank">Ongaku Entertainment</a></li>


                </ul>-->
            </div>
        </div>
    </section>