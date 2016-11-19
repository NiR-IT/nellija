<?php
//Make connection to database
include 'connection.php';
//Gather data sent from AmendProducts.php page
$id = $_POST['id'];
$title = addslashes(htmlentities($_POST['Title']));
$painter = addslashes(htmlentities($_POST['Painter']));
$description = addslashes(htmlentities($_POST['Description']));
$style = $_POST['Style'];
$year = $_POST['Year'];
$image = addslashes(htmlentities($_POST['Image']));
//Produce an update query to update product record for the id provided

$query = "UPDATE paintings
SET Title='$title', Painter_ID='$painter', Description='$description', Style='$style', Year='$year', Image='$image'
WHERE PaintingID = '$id'";

//run query 

$query_run = mysqli_query($connection, $query);


//Redirect to ManageProducts.php page
header( 'Location: browse.php' ) ;

?>
