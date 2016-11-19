<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="nellija.css">

</head>
<body>
  
    <?php
    
      include 'incl/core.php';
      include 'incl/navigation.php';
      include 'connection.php';
        
    ?>
    
    <div style="margin-top:100px;"></div>
    <div class="container row">
      <div class="offset-sm-6 col-sm-6">
        <div class="alert alert-danger text-xs-center" role="alert">
         <strong>Oops!</strong> The painting wasn't added to your favourites page. Probably you are trying to add a painting that is already in your list. <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Try again</a>!
        </div>
      </div>
    </div>
    
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
</body>
</html>