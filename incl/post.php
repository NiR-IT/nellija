 <div class="container">
      
      <div class="jumbotron" style="background-color:white; margin-top:50px;">
        <form action="" method="POST">
        <h1 class="display-3 text-xs-center">Add painting</h1><br/><hr/><br/>
        <?php
          $id = $_POST['id'];
          $title = addslashes(htmlentities($_POST['Title']));
          $painter = addslashes(htmlentities($_POST['Painter']));
          $description = addslashes(htmlentities($_POST['Description']));
          $style = $_POST['Style'];
          $year = $_POST['Year'];
          $image = addslashes(htmlentities($_POST['Image']));
          
          if(isset($_POST['submitPainting'])){
            if(empty($title) || empty($painter) || empty($description) || empty($year) || empty($image) || empty($style)) {
                echo "<div class=\"alert alert-danger col-sm-6\" role=\"alert\">
                          <strong>Oh snap!</strong> All fields are reqired.
                </div><br/><br/><br/>";
            }
          }
          
        ?>
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
              <div class="col-md-6">
                <label for="Style" class="control-label">Select painter:</label>
                <select name="Painter" class="form-control">
                    <option value="not-selected">Select</option> 
                    <option value="1">Pablo Picasso</option> 
                    <option value="2">Ilya Repin</option>
                    <option value="3">Ivan Aivazovsky</option>
                    <option value="4">Oksana Mas</option>
                </select>
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
                <label for="Style" class="control-label">Select style:</label>
                <select name="Style" class="form-control">
                    <option value="not-selected">Select</option>
                    <option value="impressionism">Impressionism</option> 
                    <option value="post impressionism">Post Impressionism</option>
                    <option value="cubism">Cubism</option>
                    <option value="realism">Realism</option>
                    <option value="expressionism">Expressionism</option>
                    <option value="romanticism">Romanticism</option>
                    <option value="abstract">Abstract art</option>
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
                  <button type="submit" class="btn btn-primary float-xs-right" name="submitPainting">Add</button>
                </div>
            </div>
          </form>
          
          <?php
          
          if(isset($_POST['submitPainting'])){
            if(!empty($title) && !empty($painter) && !empty($description) && !empty($year) && !empty($image) && !empty($style)) {
                $query="INSERT INTO paintings (Title, Painter_ID, Description, Style, Year, Image) VALUES ('$title', '$painter', '$description', '$style', '$year', '$image')";
                
                mysqli_query($connection, $query);
                
                header('Location: browse.php');
            }
          } 
          
          ?>
      </div>
    </div>