<?php require_once 'config.php';
/**
*@file
*@brief Page for Frozen spoiler
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

    <title>Frozen</title>

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
                <li><a href="tv.php">TV</a></li>
                <li><a href='classics.php'>Classics</a></li>
                <li><a href='videogames.php'>Video Games</a></li>
            
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
     <?php 
     /** Get info for Frozen */
     $frozen_query  = "select * from Movies where id =3"; 
     $frozen_result =mysql_query($frozen_query);
     /** Array of Frozen info */
     $frozen = mysql_fetch_array($frozen_result); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
    
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="../css/frozen.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $frozen[1] ?></h1>
              <p>Frozen spoiler</p>
             
            </div>
          </div>
        </div>
       
      </div>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <p> <?php echo $frozen[2] ?></p>
	</div>
      </div>

      <!-- FOOTER -->
      <footer>
        <br>
        <br>
        <br>
        <p>CSCI 3308</p>
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
