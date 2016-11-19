<?php

if(isset($_POST['Email']) && isset($_POST['Password'])){
    
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $password_hash = md5($password);
    
    if(!empty($email) && !empty($password)) {
       //I use mysqli_real_escape_string for safety reasons
       $query = "SELECT ID, Admin, Firstname FROM users WHERE Email = '".mysqli_real_escape_string($connection, $email)."' AND Password = '".mysqli_real_escape_string($connection, $password_hash)."'";
       if($query_run = mysqli_query($connection, $query)) {
           $query_num_rows = mysqli_num_rows($query_run);
           
           if($query_num_rows == 0) {
               echo "<div class=\"alert alert-danger col-sm-6\" role=\"alert\">
                          Invalid username/password combination.
                </div><br/><br/><br/>";
           } else if ($query_num_rows==1){
             $user = mysqli_fetch_assoc($query_run);
             $_SESSION['user_id'] = $user['ID'];
             $user_id = $_SESSION['user_id'];
             $_SESSION['user_name'] = $user['Firstname'];
             $user_name = $_SESSION['user_name'];
             $_SESSION['user_type'] = $user['Admin'];
             $user_type = $_SESSION['user_type'];
             header('Location: index.php');
           }
       }
       
    } else {
        echo "<div class=\"alert alert-danger col-sm-6\" role=\"alert\">
                          <strong>Oh snap!</strong> All fields are reqired.
                </div><br/><br/><br/>";
    }
}

?>