<?php
require_once('dbConnect.php');

	$conn = new Dbconnect;
    $db = $conn->getDb();

//if eventID is 0, quit program
$eventID = (int) isset($_GET['id']) ? $_GET['id'] : 0;
if ($eventID === 0)
{
	die("Invalid event id");
}

//DB query
$query = 'SELECT image, type FROM event WHERE id = ' . $eventID;

$statement = $db->prepare($query);
$statement->execute();
$images = $statement->fetchAll(PDO::FETCH_OBJ);

//for each image, use the image and type to make the BLOB viewable
if (count($images) > 0)
{
 	$eventImg = $images[0];
	
	header("Content-type: image/type");
	echo $eventImg->image;
	exit(0);
}

?>