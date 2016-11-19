<?php

ob_start();
session_start();
//the link where user is
$current_file = $_SERVER['SCRIPT_NAME'];
//the link user came from
if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
    $http_referer = $_SERVER['HTTP_REFERER'];
}
//if user logged in
function loggedin() {
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}

function isAdmin() {
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && ($_SESSION['user_type'] == 'Y')) {
        return true;
    } else {
        return false;
    }
}

?>

