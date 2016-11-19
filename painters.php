
<?php
$type = $_GET['type'];

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

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Photo</th>
                      <th>Name</th>
                      <th>Born</th>
                      <th>Biography</th>
                    </tr>
                  </thead>
                  <tbody>

    <?php
    
    $query = "SELECT * FROM painters WHERE Type = '$type' ORDER BY Painter_Name";
    
    $query_run = mysqli_query($connection, $query);
    
    $query_num = mysqli_num_rows($query_run);
    
    if($query_num >= 1) {

         echo "<div class=\" row\">
		        <div class=\"col-sm-12\">
			        <div class=\"alert alert-info\" role=\"alert\">
			            Our collection has $query_num painter(s) in this category.
			         </div>
			        <div class=\"alert alert-info\" role=\"alert\">
			            P.S. To find paintings of particular painter simply search for his name on a browsing page.
			        </div>
		        </div>
	          </div>";
    
        while($row = mysqli_fetch_assoc($query_run)) {
            $id = $row['ID'];
            $name = $row['Painter_Name'];
            $year = $row['Year_Of_Birth'];
            $country = $row['Country'];
            $styles = $row['Styles'];
            $bio = $row['Biography'];
            $type = $row['Type']; 
            $photo = $row['Photo'];
            
            echo "<tr>
                  <td><img src=\"$photo\" /></td>
                  <td>$name</td>
                  <td>$year, $country</td>
                  <td>$bio</td>
                </tr>";
        }
    
    ?>
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <?php
    
    } else {
        echo "<div id=\"container\">
			<div class=\" row\">
			<div class=\"offset-sm-2 col-sm-8 offset-xs-1 col-xs-10\">
			<div class=\"alert alert-danger\" role=\"alert\">
			Unfortunately, our collection doesn't have painters of this type.
			</div>
			<br/>
			</div>
			</div>
			</div>";
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