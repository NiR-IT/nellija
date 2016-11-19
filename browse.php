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
      include 'incl/pagination.php';
        
    ?>
    


    <?php
    
    include 'incl/searchbox.php';
		?>
		<?php 
		
		if(!isset($_GET['submitSearch']) || empty($_GET['search_paintings'])){
		echo "<nav class=\"text-xs-center\">
	        <ul class=\"pagination\">
	            <li class=\"page-item\"><a href=\"#\">$pagination</a></li>
	        </ul>
	    </nav>";
	  }
	  
	  ?>
	
	    <?php
	    include 'incl/footer.php';
  	    echo "<script type=\"text/javascript\"\>
          $(function () {
          $('[data-toggle=\"popover\"]').popover()
          })
        </script>";
	    ?>


  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
</body>
</html>