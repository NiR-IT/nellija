<?php
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['country']) && isset($_POST['city']) && isset($_POST['postcode']) && isset($_POST['age']) && isset($_POST['phone']) && isset($_POST['password']) && isset($_POST['confirmpassword'])) {
        //mysqli_real_escape_string for safety and security
        $firstname = mysqli_real_escape_string($connection, $_POST['firstName']);
        $lastname = mysqli_real_escape_string($connection, $_POST['lastName']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $address = mysqli_real_escape_string($connection, $_POST['address']);
        $country = mysqli_real_escape_string($connection, $_POST['country']);
        $city = mysqli_real_escape_string($connection, $_POST['city']);
        $postcode = mysqli_real_escape_string($connection, $_POST['postcode']);
        $age = mysqli_real_escape_string($connection, $_POST['age']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $confirmpassword = mysqli_real_escape_string($connection, $_POST['confirmpassword']);
        $password_hash = md5($password);
        $agree = $_POST['agree'];
        
        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($address) && !empty($country) && !empty($city) && !empty($postcode) && !empty($age)  && !empty($password) && !empty($confirmpassword)) {
            $uppercase = preg_match('@[A-Z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            if(!$uppercase || !$number || strlen($password) < 6) {
                echo "<div class=\"alert alert-danger col-sm-5\" role=\"alert\">
                          Password must contain <strong>at least one capital, one number and one special character</strong>
                </div><br/><br/><br/><br/>";
            } else {
            
                if($password != $confirmpassword) {
                    echo "<div class=\"alert alert-danger col-sm-5\" role=\"alert\">
                              <strong>Something went wrong!</strong> Passwords do not match!
                    </div><br/><br/><br/>";
                } else {
                
                $query = "SELECT email FROM users WHERE email = '$email'";
                $query_run = mysqli_query($connection, $query);
                
                if(mysqli_num_rows($query_run) == 1) {
                    echo "<div class=\"alert alert-danger col-sm-7\" role=\"alert\">
                              <strong>Something went wrong!</strong> The email $email already exists!
                    </div><br/><br/><br/>";
                } else {
                    $query = "INSERT INTO users VALUES ('','".mysqli_real_escape_string($connection, $email)."','".mysqli_real_escape_string($connection, $password_hash)."','".mysqli_real_escape_string($connection, $firstname)."','".mysqli_real_escape_string($connection, $lastname)."','".mysqli_real_escape_string($connection, $address)."','".mysqli_real_escape_string($connection, $country)."','".mysqli_real_escape_string($connection, $city)."','".mysqli_real_escape_string($connection, $postcode)."','".mysqli_real_escape_string($connection, $phone)."','".mysqli_real_escape_string($connection, $age)."','', '')";
                    if($query_run = mysqli_query($connection, $query)){
                        header('Location: register_success.php');
                    } else {
                        echo "<div class=\"alert alert-danger col-sm-6\" role=\"alert\">
                              <strong>Something went wrong!</strong> Not registered!.
                    </div><br/><br/><br/>";
                    }
                }
                }
        } 
    }else {
            echo "<div class=\"alert alert-danger col-sm-5\" role=\"alert\">
                          <strong>Something went wrong!</strong> All fields are required!
                </div><br/><br/><br/>";
        }
    }
    
?>