    
<?php
//Make connection to database

//Gather id sent from editp page

   $id = $_GET['id'];
 
   $query = "SELECT * FROM paintings WHERE PaintingID='$id'";
 
   $query_run = mysqli_query($connection, $query);
   
   while($row = mysqli_fetch_assoc($query_run))
   {
    $title = $row['Title'];
    $painter = $row['Painter_ID'];
    $description = $row['Description'];
    $image = $row['Image'];
    $year = $row['Year'];
    $paintingid = $row['PaintingID'];
   }

?>

<div class="container">
      
      <div class="jumbotron" style="background-color:white; margin-top:50px;">
        <form action="updatep.php" method="POST">
        <h1 class="display-3 text-xs-center">Edit a painting</h1><br/><hr/><br/>
            <div class="form-group row">
              <label for="title-of-painting" class="col-xs-5 col-form-label">Title of painting</label>
            </div>
            <div class="form-group row">
              <div class="col-xs-10">
                <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
                <input class="form-control" type="text" placeholder="Shipwreck" name="Title" value="<?php echo $title; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="Painter" class="col-xs-5 col-form-label">Painter ID</label>
            </div>
            <div class="form-group row">
                <div class="col-xs-10">
                  <input class="form-control" type="number" placeholder="1 (=Pablo Picasso)" name="Painter"  value="<?php echo $painter; ?>">
                </div>
            </div>
            <div class="form-group row">
              <label for="description" class="col-xs-5 col-form-label">Description</label>
            </div>
            <div class="form-group row">
              <div class="col-xs-10">
                  <textarea class="form-control" rows="5" id="description" placeholder="This painting is a testament to the artist’s skill of portraying light and dark. With nothing more than a pencil and gouache on paper, this scene illustrates the strong winds and crash of the waves with violent intensity." name="Description"><?php echo $description; ?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="Style" class="control-label">Select a style:</label>
                <select name="Style" class="form-control">
                    <option value="impressionism">Impressionism</option> 
                    <option value="post impressionism">Post Impressionism</option>
                    <option value="cubism">Cubism</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="year" class="col-xs-5 col-form-label">Year</label>
            </div>
            <div class="form-group row">
                <div class="col-xs-10">
                  <input class="form-control" type="number" placeholder="1854" name="Year"  value="<?php echo $year; ?>">
                </div>
            </div>
            <div class="form-group row">
              <label for="image_url" class="col-xs-5 col-form-label">Image URL</label>
            </div>
            <div class="form-group row">
                <div class="col-xs-10">
                  <input class="form-control" type="url" placeholder="https://uploads1.wikiart.org/images/ivan-aivazovsky/shipwreck-1854.jpg!Large.jpg" name="Image"  value="<?php echo $image; ?>">
                </div>
            </div>
             <div class="form-group row">
                <div class="col-xs-10">
                  <button type="submit" class="btn btn-primary float-xs-right" name="editPainting">Edit</button>
                </div>
            </div>
          </form>
      </div>
    </div>
