<?php require_once 'config.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Video games</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              
              
              <a class="navbar-brand" href="#">Spoiler Alert</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">

                <li><a href="movies.php">Movies</a></li>
                <li><a href="tv.php">TV</a></li>
                <li><a href='classics.php'>Classics</a></li>
                <li class='active'><a href='videogames.php'>Video Games</a></li>
            
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
    
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../CSS/videogames.jpg" alt="First slide"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>Video Games</h1>
              <p>This page contains Video Game spoilers</p>
              <p>Choose a spoiler below or</p>
              <p><a class="btn btn-lg btn-primary" href="create.php" role="button">Create Your Own</a></p>
             
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
     <body>
    <?php /**
 * This section is where we grab the spoilers from the movies table
 */
 
  /** Selects title from Movie database */
  $query = "select title from videogames where id =1";   
  $result=mysql_query($query); 
  /** title of Movie */ 
  $game = mysql_fetch_array($result); 

  /** Selects title from Movie database */
  $query2 = "select title from videogames where id =3"; 
  $result2=mysql_query($query2); 
  /* title of Movie */ 
  $game2 = mysql_fetch_array($result2); 

  /** Selects title from Movie database */
  $query3 = "select title from videogames where id =4";  
  $result3=mysql_query($query3); 
  /** title of Movie */
  $game3 = mysql_fetch_array($result3); ?>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">

          <img class="img-circle" src="../css/bioshock.jpg" style="width: 140px; height: 140px;">

          <h2><?php $game[0] ?></h2>
          <p>You are playing as the silent protagonist Jack. The game opens with Jack on a plane flying over the Atlantic in the year 1960. Naturally the plane crashes, and Jack finds himself in the middle of the Atlantic, </p>
          <p><a class="btn btn-default" href="bioshock.php" role="button">Spoil &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../css/fallout3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">

          <h2><?php $game2[0] ?></h2>

          <p>Fallout 3 features the player as the protagonist, born in a vault in post apocalyptic America. A nuclear war 200 years prior with China has left the USA pretty much totally decimated.</p>
          <p><a class="btn btn-default" href="fallout3.php" role="button">Spoil &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../css/braid.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">

          <h2><?php $game3[0] ?></h2>

          <p>Braid is an indie game centered around the protagonist, Tim. Tim is searching for a Princess that was...</p>
          <p><a class="btn btn-default" href="braid.php" role="button">Spoil &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->




      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
