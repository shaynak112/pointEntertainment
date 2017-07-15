<?php
require_once('dbConnect.php');

	$conn = new Dbconnect;
    $db = $conn->getDb();

//if galleryID is 0, quit program
$galleryID = (int) isset($_GET['id']) ? $_GET['id'] : 0;
if ($galleryID === 0)
{
	die("Invalid gallery id");
}

//DB query
$query = 'SELECT image, type FROM gallery WHERE id = ' . $galleryID;

$statement = $db->prepare($query);
$statement->execute();
$images = $statement->fetchAll(PDO::FETCH_OBJ);

//for each image, use the image and type to make the BLOB viewable
if (count($images) > 0)
{
 	$galleryImg = $images[0];
	
	header("Content-type: image/type");
	echo $galleryImg->image;
	exit(0);
}

?>