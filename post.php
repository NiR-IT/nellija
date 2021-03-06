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
     if (isAdmin()){
        include 'incl/post.php';
    } else if(!isAdmin()) {
        $link = 'index.php';
        header('Location: '.$link);
    }
    
    ?>
    
    
            
    <?php
    
    include 'incl/footer.php';
    
    ?>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>