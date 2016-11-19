<?php
    include 'core.php';
    include '../connection.php';
?>

<?php
$id = $_GET['id'];

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM fav_page WHERE User_ID = '$user_id' AND Painting_ID = '$id'";
$query_run=mysqli_query($connection, $query);

while($row=mysqli_fetch_assoc($query_run)){
    $userid = $row['User_ID'];
    $painting = $row['Painting_ID'];
}

$rows = mysqli_num_rows($query_run);

if($rows == 0) {

    $query = "INSERT INTO fav_page (FavID, User_ID, Painting_ID, Add_Date) VALUES (NULL,'$user_id', '$id', NULL)";
    
    $query_run = mysqli_query($connection, $query);
    
    if($query_run) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
    } else {
        header("Location: ../error.php");
    }
} else {
        header("Location: ../error.php");
}

?>
