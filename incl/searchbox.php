<div style="margin-top:100px;"></div>

	<div class="container">
		<form method="GET" action="">
			<div class="form-group row">
			<div class="offset-sm-3 col-sm-5 col-xs-10">
			<input type="text" class="form-control" name="search_paintings" placeholder="Search for paintings" required>
			</div>
			<input type="submit" class="col-xs-0.5 btn btn-default" name="submitSearch" value="Go!">
			</div>
		</form>
	</div>
		<!--<p class="text-xs-center">OR Sort By</p>
		<form method="GET" action="">
		<div class="form-group row">
		<div class="offset-sm-3 col-sm-5 col-xs-10">
		<div class="form-group">
		<select class="form-control" name="filter" placeholder="Filter by">
		<option value="PaintingID" disabled selected>--</option>
		<option value="Title">Title (default)</option>
		<option value="Painter_Name">Painter</option>
		<option value="Year">Year</option>
		<option value="PaintingID">ID</option>
		</select>
		</div>
		</div>
		<input type="submit" class="col-xs-0.5 btn btn-default" name="submitFilter" value="Go!">
		</div>
		</form>-->


	<div style="margin-top:30px;"></div>

	<?php
	if(isset($_GET['search_paintings']) || isset($_GET['submitSearch'])) {
		$search_paintings = addslashes($_GET['search_paintings']);
		if(!empty($search_paintings)){
	
			if(strlen($search_paintings) > 2) {
				$query = "SELECT PaintingID, Title, Painter_Name, Description, Year, Image FROM paintings, painters WHERE painters.ID = paintings.Painter_ID AND (Title LIKE '%".mysqli_real_escape_string($connection, $search_paintings)."%' 
				OR Painter_Name LIKE '%".mysqli_real_escape_string($connection, $search_paintings)."%'
				OR Style LIKE '%".mysqli_real_escape_string($connection, $search_paintings)."%') 
				ORDER BY PaintingID DESC";
				$query_run = mysqli_query($connection, $query);
				
				$query_num_rows = mysqli_num_rows($query_run);
	
				if($query_num_rows>=1){
					echo "<div id=\"container\">
					<div class=\" row\">
					<div class=\"offset-sm-2 col-sm-8\">
					<div class=\"alert alert-success\" role=\"alert\">
					<strong>$query_num_rows</strong> results found:
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
	
	?>
	<div id="container">


	<?php
		if(loggedin() && !isAdmin())
		{
			echo "
			<div class=\"row\">
			<div class=\"offset-sm-2 col-sm-8\"> 
			<div class=\"card\">
			<div class=\"card-block\">
			<h4 class=\"card-title text-sm-center\">$title ($year)</h4>
			<h6 class=\"card-subtitle text-sm-center text-muted\">$painter</h6>
			</div>
			<p class=\"text-xs-center\"><img style=\"width:300px; height:300px;\" src=\"$image\" alt=\"Card image\"></p>
			<div class=\"card-block\">
			<p class=\"card-text text-sm-center\">$description</p>
			<p class=\"text-xs-center\"><a href=\"incl/fav_page.php?id=$paintingid\" id=\"addFav\"class=\"btn btn-primary\" name=\"addFav\">Add to favorites</a></p>
			</div>
			</div>
			</div>
			</div>
			";
		} else if(loggedin() && isAdmin())
		{
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
			<p class=\"text-xs-center\"><a href=\"incl/fav_page.php?id=$paintingid\" id=\"addFav\"class=\"btn btn-primary\" name=\"addFav\">Add to favorites</a></p>
			</div>
			</div>
			</div>
			</div>
			";
		} else 
		{
			echo "
			<div class=\"row\">
			<div class=\"offset-sm-2 col-sm-8\"> 
			<div class=\"card\">
			<div class=\"card-block\">
			<h4 class=\"card-title text-sm-center\">$title ($year)</h4>
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
			} //while end
		} else {
			echo "<div id=\"container\">
			<div class=\" row\">
			<div class=\"offset-sm-2 col-sm-8 offset-xs-1 col-xs-10\">
			<div class=\"alert alert-danger\" role=\"alert\">
			Nothing has been found. <strong>Try again!</strong>
			</div>
			<br/>
			</div>
			</div>
			</div>";//container end
		}
			} //if strlen end
				else {
				echo "<div id=\"container\">
				<div class=\" row\">
				<div class=\"offset-sm-2 col-sm-8 offset-xs-1 col-xs-10\">
				<div class=\"alert alert-danger\" role=\"alert\">
				Your keyword must be 3 characters or more. <strong>Try again!</strong>
				</div>
				<br/>
				</div>
				</div>
				</div>";
				}
		?>

		</div>
		<?php
			}
			} else {

				$query = "SELECT PaintingID, Title, Painter_Name, Description, Year, Image FROM paintings, painters WHERE painters.ID = paintings.Painter_ID ORDER BY PaintingID DESC LIMIT $start, $per_page";
				
				$query_run = mysqli_query($connection, $query);
			
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
			}//else end
			?>
		</div>