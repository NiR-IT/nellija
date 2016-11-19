<!-- After Signing up user is redirected to this page -->

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/nellija.css">
  <link href="css/signin.css" rel="stylesheet">

</head>
<body>
    
    <?php
    include 'incl/core.php';
    include 'connection.php';
    include 'incl/navigation.php';
    
    ?>
    
    <?php
    
    if (!loggedin()){
    
    ?>

    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-sm-3">
            </div>
            
            <div class="col-sm-6">
                <div class="card">
                  <div class="card-header">
                    Registration completed!
                  </div>
                  <div class="card-block">
                    <h4 class="card-title"><?php echo "Welcome, dear user!"; ?></h4>
                    <p class="card-text">You have registreted successfuly!.</p>
                    <a href="signin.php" class="btn btn-primary">Log in and start browsing the gallery!</a>
                  </div>
                </div>
            </div>
            
            <div class="col-sm-3"></div>
            </div>
        </div>
    </div>
    
    <?php
    
    } else if(loggedin()) {
        $link = 'index.php';
        header('Location: '.$link);
    }
    
    ?>

    <footer style="margin-top:30px;" class="navbar-fixed-bottom">
    <hr/>
    <div id="container">
        <div class="row">
            <div class="col-sm-9">
            </div>
            
            <div class="col-sm-3">
                <p class="text-muted">Copyright &copy; 2016 Nikita Ribakovs</p>
            </div>
        </div>
    </div>
  </footer>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

