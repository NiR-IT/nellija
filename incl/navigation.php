

<nav class="navbar navbar-light bg-faded navbar-fixed-top">
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
    <a class="navbar-brand float-sm-left float-xs-right" href="index.php" alt="Nellija" height="26"><img style="height:30px; weight:24px;" src="img/logonel.png" /></a>
    <div class="collapse navbar-toggleable-md" id="navbarResponsive">
      <ul class="nav navbar-nav">
        <?php
        if(isAdmin()) {
        echo "<li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"post.php\" id=\"responsiveNavbarDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Admin panel</a>
          <div class=\"dropdown-menu\" aria-labelledby=\"responsiveNavbarDropdown\">
            <a class=\"dropdown-item\" href=\"post.php\">Add painting</a>
            <a class=\"dropdown-item\" href=\"addpainter.php\">Add painter</a>
          </div>
        </li>";
        }
        ?>
        <li class="nav-item active">
          <a class="nav-link" href="/nellija/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="browse.php">Browse paintings</a>
        </li>
        <?php
        if(loggedin()) {
        echo "<li class=\"nav-item\" >
          <a class=\"nav-link\" href=\"fav_page.php\">Favorites Page</a>
        </li>";
        }
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="style.php?cat=realism" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Styles of art</a>
          <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
            <a class="dropdown-item" href="style.php?cat=impressionism">Impressionism</a>
            <a class="dropdown-item" href="style.php?cat=cubism">Cubism</a>
            <a class="dropdown-item" href="style.php?cat=realism">Realism</a>
            <a class="dropdown-item" href="style.php?cat=Expressionism">Expressionism</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="painters.php?type=M" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Painters</a>
          <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
            <a class="dropdown-item" href="painters.php?type=M">Modern</a>
            <a class="dropdown-item" href="painters.php?type=B">Before 20th century</a>
          </div>
        </li>
        <?php
        
        if(loggedin() == false) {
        echo "<li class=\"nav-item float-sm-right\" >
          <a class=\"btn btn-primary\" href=\"signin.php\">Log in</a>
          <a class=\"btn btn-success\" href=\"signup.php\">Sign Up</a>
        </li>";
        } else if(loggedin()){
          echo "<li class=\"nav-item float-sm-right\" >
          <a class=\"nav-link\" href=\"incl/logout.php\">Log out</a>
          </li>";
        }
        ?>
      </ul>
    </div>
  </nav>