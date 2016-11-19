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
  <link rel="stylesheet" href="nellija.css">

</head>
<body >
  
  <?php
    include 'incl/core.php';
    include 'incl/navigation.php';
  ?>

  <div id="stage">
    <div id="stage-caption">
      <h1 class="display-3">Nellija Art Gallery</h1>
      <p>The Museum of Private Collections</p>
      <a href="browse.php" class="btn btn-lg btn-success">VIEW THE GALLERY</a>
    </div>
  </div>

    <section id="feature-one">
    <div class="container" style="margin-top:50px; margin-bottom:50px;">
      <div class="card-deck-wrapper">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="img/painting.jpg" style="height:250px; width:100%; alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Paintings</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, temporibus, sunt dicta suscipit voluptates mollitia adipisci necessitatibus repudiandae a facere officia vel quidem commodi? Adipisci, sapiente nesciunt dolorum repudiandae libero.</p>
              <p class="card-text"><a class="btn btn-info" href="browse.php">Browse</a></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="img/modern.jpg" style="height:250px; width:100%;" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Modern painters</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, temporibus, sunt dicta suscipit voluptates mollitia adipisci necessitatibus repudiandae a facere officia vel quidem commodi? Adipisci, sapiente nesciunt dolorum repudiandae libero.</p>
              <p class="card-text"><a class="btn btn-info" href="painters.php?type=M">Browse</a></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="img/for.jpg" style="height:250px; width:100%;" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">Painters <20th century</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, temporibus, sunt dicta suscipit voluptates mollitia adipisci necessitatibus repudiandae a facere officia vel quidem commodi? Adipisci, sapiente nesciunt dolorum repudiandae libero.</p>
              <p class="card-text"><a class="btn btn-info" href="painters.php?type=B">Browse</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="feature-two" class="feature-dark">
    <div class="container">
      <div class="row">
        <div class="feature-content">
          <div class="col-lg-6 feature-caption">
            <h6>About us</h6>
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque esse blanditiis harum nisi, reprehenderit aut iste, maxime velit iusto ab deserunt incidunt a ipsa fugit, iure, sit natus dolorem hic.</p>
            <a href="browse.php" role="button" class="btn btn-outline-secondary btn-lg">Gallery</a>
          </div>
          <div class="col-lg-6 text-sm-center hidden-sm-down">
            <img src="img/iphone-1.png" alt="iphone">
          </div>
        </div>
      </div>
    </div>
  </section>
  
    <?php
    
    include 'incl/contactus.php';
    
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