<?php
//Make connection to database
include 'connection.php';
//Gather id from $_GET[]
$id = $_GET['id'];

$query = "DELETE FROM fav_page WHERE FavID = '$id'";

//run $query
$query_run = mysqli_query($connection, $query);
// check to see if any rows were affected

if (mysqli_affected_rows($connection) > 0) {

      //If yes , return to calling page(stored in the server variables)
    header("Location: {$_SERVER['HTTP_REFERER']}");

} else {
      // print error message
      echo "Error in query: $query. " . mysqli_error($connection);
      exit ;
}
		
?>

