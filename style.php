
<?php
$cat = $_GET['cat'];

?>

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


        <?php

		$query = "SELECT PaintingID, Title, Painter_Name, Description, Year, Image FROM paintings, painters WHERE painters.ID = paintings.Painter_ID AND Style='$cat' ORDER BY PaintingID DESC";
		
		$query_run = mysqli_query($connection, $query);
		
		$query_num_rows = mysqli_num_rows($query_run);
	
		if($query_num_rows>=1){
			echo "<div id=\"container\">
			<div class=\" row\">
			<div class=\"offset-sm-2 col-sm-8\">
			<div class=\"alert alert-success\" role=\"alert\">
			Our collection has <strong>$query_num_rows</strong> painting(s) drawn in $cat style.
			</div>
			<div class=\"alert alert-success\" role=\"alert\">
			P.S. To find paintings of particular style simply search for its name on a browsing page.
			</div>
			<br/>
			</div>
			</div>
			</div>";
	
		while($row = mysqli_fetch_assoc($query_run)) {
			$title = $row['Title'];
			$painter = $row['Painter_Name'];
			$description = $row['Description'];
			$image = $row['Image'];
			$year = $row['Year'];
			$paintingid = $row['PaintingID'];
		?>

		<div id="container">
			
		<?php
			//show div if current user is logged in, but not as admin
			if(loggedin() && !isAdmin()){
				echo "
				<div class=\"row\">
				<div class=\"offset-sm-2 col-sm-8\"> 
				<div class=\"card\">
				<div class=\"card-block\">
				<h4 class=\"card-title text-xs-center\">$title ($year)</h4>
				<h6 class=\"card-subtitle text-xs-center text-muted\">$painter</h6>
				</div>
				<p class=\"text-xs-center\"><img style=\"width:300px; height:300px;\" src=\"$image\" alt=\"Card image\"></p>
				<div class=\"card-block\">
				<p class=\"card-text text-xs-center\">$description</p>
				<p class=\"text-xs-center\"><a href=\"incl/fav_page.php?id=$paintingid\" id=\"addFav\"class=\"btn btn-primary\" name=\"addFav\">Add to favorites</a></p>
				</div>
				</div>
				</div>
				</div>
				";
			//show div if current user is an admin
			} else if(loggedin() && isAdmin()){
				echo "
				<div class=\"row\">
				<div class=\"offset-sm-2 col-sm-8\"> 
				<div class=\"card\">
				<div class=\"card-block\">
				<h4 class=\"card-title text-xs-center\">$title ($year) - <a href='deletep.php?id=$paintingid' />Delete</a> <a href='editp.php?id=$paintingid' />Edit</a></h4>
				<h6 class=\"card-subtitle text-xs-center text-muted\">$painter</h6>
				</div>
				<p class=\"text-xs-center\"><img style=\"width:300px; height:300px;\" src=\"$image\" alt=\"Card image\"></p>
				<div class=\"card-block\">
				<p class=\"card-text text-xs-center\">$description</p>
				<p class=\"text-xs-center\"><a href=\"incl/fav_page.php?id=$paintingid\" id=\"addFav\"><input onclick=\"this.value='Added'\" name=\"addFav\ type=\"button\" class=\"btn btn-primary\"value=\"Add to favorites\" id=\"myButton1\"></input></a></p>
				</div>
				</div>
				</div>
				</div>
				";
			}else {
				echo "
				<div class=\"row\">
				<div class=\"offset-sm-2 col-sm-8\"> 
				<div class=\"card\">
				<div class=\"card-block\">
				<h4 class=\"card-title text-xs-center\">$title ($year)</h4>
				<h6 class=\"card-subtitle text-xs-center text-muted\">$painter</h6>
				</div>
				<p class=\"text-xs-center\"><img style=\"width:300px; height:300px;\" src=\"$image\" alt=\"Card image\"></p>
				<div class=\"card-block\">
				<p class=\"card-text text-xs-center\">$description</p>
				</div>
				</div>
				</div>
				</div>
				";
			}
				} //while end
		} else {
		    echo "<div id=\"container\">
			<div class=\" row\">
			<div class=\"offset-sm-2 col-sm-8 offset-xs-1 col-xs-10\">
			<div class=\"alert alert-danger\" role=\"alert\">
			Unfortunately, our collection doesn't have paintings drawn in <strong>$cat</strong> style.
			</div>
			<br/>
			</div>
			</div>
			</div>";//container end
		}
			?>
		</div>
		
		<?php
    
    include 'incl/footer.php';
    
    ?>
	


  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>

  <script src="js/bootstrap.min.js"></script>
</body>
</html>