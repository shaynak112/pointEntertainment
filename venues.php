  <!-- Venues -->
    <section id="venues" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Venues</h2>
                <div id="venuesWrapper">

<p>Point Entertainment has put on events at various clubs/lounges around Toronto including <a href="https://www.facebook.com/SoundXchange/" target="_blank" class="venueClass">Sound Xchange</a>, <a href="http://www.club120.ca/" target="_blank" class="venueClass">Club 120</a>, and <a href="https://www.facebook.com/populusclub/" target="_blank" class="venueClass">Populus</a> (previously Toika). We have worked with other DJs, promoters, and event planners for events at venues such as Coda, VintaGe, Comfort Zone, One Loft, Bassline, Nest, and Li'Ly Lounge.</p>

<h2>Sound Xchange</h2>
<p>Sound Xchange is located at 421 Dundas Street West. To enter, you go through the mall and up the stairs to the left. Follow the beats. They are open Thursdays, Fridays, Saturdays, and Sundays for various events. Check out Sound Xchange's <a href='https://www.facebook.com/SoundXchange/' target='_blank'></p>
<p><a href='https://www.facebook.com/SoundXchange/' target='_blank'><img src='venues/sxdecor.jpg' style='width:50%;display:inline-block;margin-left:0px;' title='Sound Xchange'></a></p>


<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM venues ORDER BY venueName ASC;";
            $statement = $db->prepare($query);
            $statement->execute();
            $venues = $statement->fetchAll(PDO::FETCH_OBJ);


foreach($venues as $v)
{


	echo "<br/>";
	echo "<h3>" . $v->venueName . "</h3>";
	echo "<div>Address: " . $v->venueAddress . "</div>";
	echo "<div>For more information, <a href='" . $v->venueURL . "' target='_blank'>check out their page</a></div>";
	echo "<br/>";

}
?>

				</div><!--end venuesWrapper-->
            </div><!--end col-lg-8 col-lg-offset-2-->
        </div><!--end row-->
    </section>