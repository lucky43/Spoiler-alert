<?php require_once 'config.php';?>
<!--classics.html-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Classics</title>

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
                <li class = "active"><a href='classics.php'>Classics</a></li>
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
          <img src="../css/classics.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Classics</h1>
              <p>Classic spoilers</p>
             
            </div>
          </div>
        </div>
       
      </div>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<?php 
/**
 * This section is where we grab the spoilers from the classics table
 */
 $query = "select * from classics where id =1"; 
 $result=mysql_query($query);
 $classics = mysql_fetch_array($result); /* array of info from classics table */

 $query2 = "select * from classics where id =2"; 
 $result2=mysql_query($query2);
 $classics2 = mysql_fetch_array($result2); /* array of info from classics table */

 $query3 = "select * from classics where id =3"; 
 $result3=mysql_query($query3);
 $classics3 = mysql_fetch_array($result3); /* array of info from classics table */

 $query4 = "select * from classics where id =4"; 
 $result4 =mysql_query($query4); 
 $classics4 = mysql_fetch_array($result4); /* array of info from classics table */

?>

    <div class="container marketing">
    
       <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h1><?php echo $classics[1] ?></h1>
          <br>
          <p><?php echo $classics[2] ?></p>
  </div>
      </div>

       <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h1><?php echo $classics2[1] ?></h1>
          <br>
          <p><?php echo $classics2[2] ?></p>
  </div>
      </div>

       <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h1><?php echo $classics3[1] ?></h1>
          <br>
          <p><?php echo $classics3[2] ?></p>
  </div>

     <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h1><?php echo $classics4[1] ?></h1>
          <br>
          <p><?php echo $classics4[2] ?></p>
  </div>
  <br>
  <br>
  <br>
  <br>
      </div>
    

      <!-- FOOTER -->
      <footer>
        <br>
        <br>
        <br>
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
