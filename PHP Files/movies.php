<?php require_once 'config.php';
/**
*@file
*@brief Contains Movie Spoilers.
*
*To add different spoilers, change the id of one of the querys, the picture, and the short synopsis. 
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

    <title>Carousel Template for Bootstrap</title>

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
    <?php 
 
 /** Selects title from Movie database */
 $query = "select title from movies where id =1";   
 $result=mysql_query($query); 
 /** title of Movie */ 
 $movies = mysql_fetch_array($result); 

 /** Selects title from Movie database */
 $query2 = "select title from movies where id =3"; 
 $result2=mysql_query($query2); 
 /* title of Movie */ 
 $movies2 = mysql_fetch_array($result2); 

/** Selects title from Movie database */
 $query3 = "select title from movies where id =4";  
 $result3=mysql_query($query3); 
 /** title of Movie */
 $movies3 = mysql_fetch_array($result3); ?>

    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              
              
              <a class="navbar-brand" href="landing.html">Spoiler Alert</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <li class="active"><a href="movies.php">Movies</a></li>
                <li><a href="tv.php">TV</a></li>
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
          <img src="../CSS/theater.jpg" alt="First slide"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>Movies</h1>
              <p>This page contains movie spoilers</p>
              <p>Choose a spoiler below or</p>
              <p><a class="btn btn-lg btn-primary" href="create.php" role="button">Create Your Own</a></p>
             
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="../css/fightclub.jpg" style="width: 140px; height: 140px;">
           <h2><?php echo $movies[0] ?></a></h2>
          <p>A nameless first person Narrator opens the movie with a gun being held in his mouth by a man named Tyler Durden. However he decides that its best if the story starts from the beginning. The narrator explains that he is an insomniac. He is seen working his dead end, boring, desk job, and having many a sleepless night.</p>
          <p><a class="btn btn-default" href="fightclub.php" role="button">Spoil &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../css/frozen.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2><?php echo $movies2[0] ?></a></h2>
          <p>In Frozen, Elsa, the princess of Arendelle has the magic ability to create snow and ice at will. One night she is playing with her younger sister, Anna, when she accidentally strikes her in the head with a beam of this magic. Their parents take the injured Anna to a troll family, where a troll shaman removes the harmful effects of the magic</p>
          <p><a class="btn btn-default" href="frozen.php" role="button">Spoil &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="../css/shaunofthedead.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2><?php echo $movies3[0] ?></a></h2>
          <p> Shaun, the movie’s protagonist, is in a dead end job in a local electronics shop. He lives with his best friend Ed, and another man named Pete. Pete hates Ed. Naturally this means he and Shaun often butt heads. Shaun’s girlfriend, Liz, desires more from the couple’s social life, and relationship as a whole.</p>
          <p><a class="btn btn-default" href="shaun.php" role="button">Spoil &raquo;</a></p>
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
