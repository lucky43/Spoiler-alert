<?php require_once 'config.php';
/**
 *@file
 *@brief This page is where we grab the Title of 3 spoilers from the tv table
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Television</title>

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
              
              
              <a class="navbar-brand" href="landing.html">Spoiler Alert</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">

                <li><a href="movies.php">Movies</a></li>
                <li class='active'><a href="tv.php">TV</a></li>
                <li><a href='classics.php'>Classics</a></li>
                <li><a href='videogames.php'>Video Games</a></li>
            
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
          <img src="../CSS/tv.jpg" alt="First slide"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>TV</h1>
              <p>This page contains TV spoilers</p>
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
    <?php 

 
 /** Selects title from Movie database */
 $query = "select title from tv where id =1";   
 $result=mysql_query($query); 
 /** title of show id=1 */ 
 $tv = mysql_fetch_array($result); 

 /** Selects title from Movie database */
 $query2 = "select title from tv where id =2"; 
 $result2=mysql_query($query2); 
 /* title of show id=2 */ 
 $tv2 = mysql_fetch_array($result2); 

/** Selects title from Movie database */
 $query3 = "select title from tv where id =3";  
 $result3=mysql_query($query3); 
 /** title of Show id=3 */
 $tv3 = mysql_fetch_array($result3); ?>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">

          <img class="img-circle" src="../css/walkingdead1.jpg" style="width: 140px; height: 140px;">
          <h2><?php echo $tv[0] ?></h2>

          <p>Sheriff Deputy Rick Grimes is shot in a fight against criminals. He goes into a coma for some period of time. When he wakes up, something is clearly amiss. Cue zombie apocalypse.</p>
          <p><a class="btn btn-default" href="WD1.php" role="button">Spoil &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../css/walkingdead2.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">

          <h2><?php echo $tv2[0] ?></h2>

          <p>he second season begins with Rick and his group of survivors leaving Atlanta. They decide Fort Benning will be their next destination. Along the way, they encounter a traffic jam</p>
          <p><a class="btn btn-default" href="WD2.php" role="button">Spoil &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../css/walkingdead3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2><?php echo $tv3[0] ?></h2>

          <p>Season 3 starts 8 and a half months after they escaped the farm, Lori being in the final days of her pregnancy. They discover a deserted prison and, while clearing it of walkers, Hershel is bitten by his leg.</p>
          <p><a class="btn btn-default" href="WD3.php" role="button">Spoil &raquo;</a></p>
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
