 <div class="container">
      
      <div class="jumbotron" style="background-color:white; margin-top:50px;">
        <form action="" method="POST">
        <h1 class="display-3 text-xs-center">Add painter</h1><br/><hr/><br/>
        <?php
          
          if(isset($_POST['id']) && isset($_POST['pname']) && isset($_POST['year']) && isset($_POST['country']) && isset($_POST['styles']) && isset($_POST['bio']) && isset($_POST['type']) && isset($_POST['photo_url'])){
            $id = $_POST['id'];
            $pname = addslashes(htmlentities($_POST['pname']));
            $year = addslashes(htmlentities($_POST['year']));
            $country = addslashes(htmlentities($_POST['country']));
            $styles = $_POST['styles'];
            $bio = $_POST['bio'];
            $type = $_POST['type'];
            $photo_url = addslashes(htmlentities($_POST['photo_url']));
            if(empty($pname) || empty($year) || empty($country) || empty($styles) || empty($bio) || empty($type) || empty($photo_url)) {
                echo "<div class=\"alert alert-danger col-sm-6\" role=\"alert\">
                          <strong>Oh snap!</strong> All fields are reqired.
                </div><br/><br/><br/>";
            }
          }
          
        ?>
            <div class="form-group row">
              <label for="pname" class="col-xs-5 col-form-label">Painter name</label>
            </div>
            <div class="form-group row">
              <div class="col-xs-10">
                <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
                <input class="form-control" type="text" placeholder="Pablo Picasso" name="pname" maxlength="50" value="<?php echo $pname; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="year" class="col-xs-5 col-form-label" maxlength="4">Year of Birth</label>
            </div>
            <div class="form-group row">
              <div class="col-xs-10">
                <input class="form-control" type="number" placeholder="1881" name="year" value="<?php echo $year; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="country" class="col-xs-5 col-form-label">Country</label>
            </div>
            <div class="form-group row">
              <div class="col-xs-10">
                  <input class="form-control" type="text" placeholder="Spain" name="country" maxlength="20" value="<?php echo $country; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="styles" class="col-xs-5 col-form-label">Styles</label>
            </div>
            <div class="form-group row">
              <div class="col-xs-10">
                  <input class="form-control" type="text" placeholder="Realism, impressionism, cubism" maxlength="50" name="styles" value="<?php echo $styles; ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="bio" class="col-xs-5 col-form-label">Biography</label>
            </div>
            <div class="form-group row">
                <div class="col-xs-10">
                  <textarea class="form-control" id="message" name="bio" maxlength="5000" placeholder="Painter biography" rows="7"><?php echo $bio ?></textarea><br/>
                </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="type" class="control-label">Select type:</label>
                <select name="type" class="form-control">
                    <option value="not-selected">Select</option>
                    <option value="M">Modern painter</option> 
                    <option value="B">Painter of the past</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="photo_url" class="col-xs-5 col-form-label">Photo URL</label>
            </div>
            <div class="form-group row">
                <div class="col-xs-10">
                  <input class="form-control" type="url"  maxlength="200" placeholder="https://uploads1.wikiart.org/images/ivan-aivazovsky/shipwreck-1854.jpg!Large.jpg" name="photo_url"  value="<?php echo $photo_url; ?>">
                </div>
            </div>
             <div class="form-group row">
                <div class="col-xs-10">
                  <button type="submit" class="btn btn-primary float-xs-right" name="submitPainter">Add</button>
                </div>
            </div>
          </form>
          
          <?php
          
          if(isset($_POST['id']) && isset($_POST['pname']) && isset($_POST['year']) && isset($_POST['country']) && isset($_POST['styles']) && isset($_POST['bio']) && isset($_POST['type']) && isset($_POST['photo_url'])){
            if(!empty($pname) && !empty($year) && !empty($country) && !empty($styles) && !empty($type) && !empty($bio) && !empty($photo_url)) {
                $query="INSERT INTO painters VALUES (NULL, '$pname', '$year', '$country', '$styles', '$bio', '$type', '$photo_url')";
                
                mysqli_query($connection, $query);
                
                header('Location: browse.php');
            }
          } 
          
          ?>
      </div>
    </div>