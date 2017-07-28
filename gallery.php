 <!-- Gallery -->
    <section id="gallery" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Gallery</h2>
                    <p>Point has hosted many events including various international DJs such as Durty Soxxx, Nick Bertossi, Mladen Tomic, Agent Orange, and more. And we have a few more coming up.</p>

                    <p>Let's Dance has become a staple in the techno community for friendly events with local, quality DJs for the past few years and we are currently expanding so that we can bring in both international DJs as well as host local events.</p>

                    <p>Many thanks to <a href='https://www.facebook.com/itsonlykotsy/' target='_blank'>Kotsy</a> for many of these photos.</p>

        <p>Click on each image for a brief description.</p>

        <?php

            $dbconn2 = new Dbconnect;
            $db2 = $dbconn2->getDb();
            $query2 = "SELECT * FROM gallery WHERE posted = 'yes' ORDER BY id DESC";
            $statement2 = $db2->prepare($query2);
            $statement2->execute();
            $gallery = $statement2->fetchAll(PDO::FETCH_OBJ);

        ?>

     

        <?php

            $increment = 0;


            foreach($gallery as $g)
            {
                if($increment===0)
                {
                    ?>
                    <div class='row'>
                    <div class='col-lg-12'>
                        <div class="col-lg-3">
                        <?php echo "<img class='galleryImg'src='galleryViewerImg.php?id=" . $g->id . "'>"; ?>
                        <!--<img src="gallery/img_01.jpg" class="galleryImg" />-->
                        <p class="galleryInfo"><?php echo $g->caption; ?></p>
                        </div>
                        <?php
                        $increment++; 
                }
                elseif($increment%4===0)
                {
                    ?>
                    </div>
                    </div>
                    <div class='row'>
                    <div class='col-lg-12'>
                        <div class="col-lg-3">
                        <?php echo "<img src='galleryViewerImg.php?id=" . $g->id . "' class='galleryImg'>"; ?>
                        <!--<img src="gallery/img_01.jpg" class="galleryImg" />-->
                        <p class="galleryInfo"><?php echo $g->caption; ?></p>
                        </div>
                        <?php
                        $increment++;
                }
                else
                {
                    ?>

                    <div class="col-lg-3">
                    <?php echo "<img src='galleryViewerImg.php?id=" . $g->id . "' class='galleryImg'>"; ?>
                    <!--<img src="gallery/img_02.jpg" class="galleryImg" />-->
                    <p class="galleryInfo"><?php echo $g->caption; ?></p>
                    </div>
                    <?php
                    $increment++;
                }




                

            }

        ?>

        </div>
        </div>

             <!--   <div class="col-lg-3">
                    <img src="gallery/img_02.jpg" class="galleryImg" />
                    <p class="galleryInfo">Deko-ze and Ticky Ty, an unstoppable pair</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_03.jpg" class="galleryImg" />
                    <p class="galleryInfo">Lights in action at Li'ly Lounge</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_04.jpg" class="galleryImg" />
                    <p class="galleryInfo">Fun night out at Populus/Toika (Kotsy)</p>
                </div>
            </div>
        </div>

        <br/>
        <br/>
        <br/>
        <br/>

        <div class='row'>
       <div class='col-lg-12'>
            

                <div class="col-lg-3">
                    <img src="gallery/img_05.jpg" class="galleryImg" />
                    <p class="galleryInfo">Jayforce and Billey Barry (Kotsy)</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_06.jpg" class="galleryImg" />
                    <p class="galleryInfo">El Duran B2B Random Doug</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_07.jpg" class="galleryImg" />
                    <p class="galleryInfo">Panda USB stick (Kotsy)</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_08.jpg" class="galleryImg" />
                    <p class="galleryInfo">Enjoying a good night out (Kotsy)</p>
                </div>
            </div>
        </div>

        <br/>
        <br/>
        <br/>
        <br/>

        
            <div class='row'>
            <div class='col-lg-12'>

                <div class="col-lg-3">
                    <img src="gallery/img_09.jpg" class="galleryImg" />
                    <p class="galleryInfo">Thien B2B Billey Barry (Kotsy)</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_10.jpg" class="galleryImg" />
                    <p class="galleryInfo">Enjoying the music and friends!</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_11.jpg" class="galleryImg" />
                    <p class="galleryInfo">Ticky Ty spinning!</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_12.jpg" class="galleryImg" id="tallPicLights" />
                    <p class="galleryInfo">Always having fun! (Kotsy)</p>
                </div>
            </div>
        </div>

        <br/>
        <br/>
        <br/>
        <br/>

        
            <div class='row'>
            <div class='col-lg-12'>

                <div class="col-lg-3">
                    <img src="gallery/img_13.jpg" class="galleryImg" />
                    <p class="galleryInfo">Crowd dancing along at Populus (Kotsy)</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_14.jpg" class="galleryImg" />
                    <p class="galleryInfo">Club 120 group for Old School Vinyl! Beginning til end</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_15.jpg" class="galleryImg" />
                    <p class="galleryInfo">Thien opening up at Li'ly Lounge</p>
                </div>

                <div class="col-lg-3">
                    <img src="gallery/img_16.jpg" class="galleryImg" />
                    <p class="galleryInfo">Deko-ze always on fire</p>
                </div>
            </div>
        </div>-->

        <br/>
        <br/>
        <br/>
        <br/>

 <h3>Other Galleries</h3>
        <ul style="list-style:none;">

        <li><a href='https://www.facebook.com/pg/itsonlykotsy/photos/?tab=album&album_id=1437796602973262' target="_blank">Vinyl Classic Night</a></li>

        <li><a href="https://www.facebook.com/pg/itsonlykotsy/photos/?tab=album&album_id=1375099065909683" target="_blank">Psy Sessions</a></li>

        <li><a href="https://www.facebook.com/pg/itsonlykotsy/photos/?tab=album&album_id=1343575175728739" target="_blank">Innerdance IV with Cubixx/Mindbenderz</a></li>

        <li><a href="https://www.facebook.com/pg/pointentertainmenttoronto/photos/?tab=album&album_id=1401408373248727" target="_blank">Nick Bertossi</a></li>

        <li><a href="https://www.facebook.com/pg/itsonlykotsy/photos/?tab=album&album_id=1300198286733095" target="_blank">Agent Orange</a></li>

        <li><a href="https://www.facebook.com/pg/itsonlykotsy/photos/?tab=album&album_id=970674916352102" target="_blank">Let's Dance 8 - Old School Tribal</a></li>

        <li><a href="https://www.facebook.com/pg/pointentertainmenttoronto/photos/?tab=album&album_id=1022975101092058" target="_blank">Classics VS Techno</a></li>

        <li><a href="https://www.facebook.com/pg/itsonlykotsy/photos/?tab=album&album_id=952140641538863" target="_blank">Let's Dance 7 - Tech House Bombs</a></li>

        <li><a href="https://www.facebook.com/pg/itsonlykotsy/photos/?tab=album&album_id=931213183631609" target="_blank">Let's Dance 6</a></li>

        

        <li><a href="https://www.facebook.com/pg/pointentertainmenttoronto/photos/?tab=album&album_id=852483444807892" target="_blank">Let's Dance 4 - Old School Techno</a></li>

        <li><a href="https://www.facebook.com/pg/pointentertainmenttoronto/photos/?tab=album&album_id=783647078358196" target="_blank">Let's Dance 3</a></li>

        <li><a href="https://www.facebook.com/pg/pointentertainmenttoronto/photos/?tab=album&album_id=747759348613636" target="_blank">Let's Dance 1</a></li>
        

        </ul>




            </div>
        </div>
        
    </section>