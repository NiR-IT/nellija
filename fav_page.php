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
    if(!loggedin()){
        $link = 'index.php';
        header('Location: '.$link);
    } else if (loggedin()) {

    $user_id = $_SESSION['user_id'];
    
     $query = "SELECT FavID, User_ID, Painting_ID, fav_page.Add_Date, Image, Title, Year, Description, Style, Painter_ID FROM fav_page, paintings WHERE fav_page.Painting_ID = paintings.PaintingID AND User_ID = '$user_id' ORDER BY Add_Date DESC";
     $query_run = mysqli_query($connection, $query);
    
     $query_num_rows = mysqli_num_rows($query_run);
    		
     if($query_num_rows>=1){
       echo "<div id=\"container\">
			<div class=\" row\">
			<div class=\"offset-sm-2 col-sm-8 offset-xs-1 col-xs-10\">
			<div class=\"alert alert-success\" role=\"alert\">
			<strong>$query_num_rows</strong> result(s) found:
			</div>
			<br/>
			</div>
			</div>
			</div>";
			while($row = mysqli_fetch_assoc($query_run)){
				$title = $row['Title'];
				$painter = $row['Painter_Name'];
				$description = $row['Description'];
				$image = $row['Image'];
				$year = $row['Year'];
				$paintingid = $row['PaintingID'];
				$pt = $row['Painting_ID'];
				$favid = $row['FavID'];
				$userid = $row['User_ID'];
				
				echo "
						        <div class=\"row\">
						          <div class=\"offset-sm-2 col-sm-8\"> 
						              <div class=\"card\">
						                <div class=\"card-block\">
						                  <h4 class=\"card-title text-sm-center\">$title ($year) - <a href='deletef.php?id=$favid' />Remove</a></h4>
						                  <h6 class=\"card-subtitle text-sm-center text-muted\">$painter</h6>
						                </div>
						                <p class=\"text-xs-center\"><img style=\"width:300px; height:300px;\" src=\"$image\" alt=\"Card image\"></p>
						                <div class=\"card-block\">
						                  <p class=\"card-text text-sm-center\">$description</p>
						                </div>
						              </div>
						          </div>
						        </div>
						           ";
			}
			echo "<div class=\"row\">
					<div class=\"offset-sm-2 col-sm-8\">
						<p class=\"text-sm-right text-xs-center\"><a href='deleteall.php?id=$userid' class=\"btn btn-info\" />Remove all paintings from Favorites list</a></button></p>
					</div>
				 </div>";
     } else if($query_num_rows == 0) {
         echo "<div id=\"container\">
                  <div class=\" row\">
					          <div class=\"offset-sm-2 col-sm-8 offset-xs-1 col-xs-10\">
  					          <div class=\"alert alert-danger\" role=\"alert\">
                      Favorites page is emty.
                    </div>
					          <br/>
					          </div>
					        </div>
					      </div>";
     }
     }
    ?>
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