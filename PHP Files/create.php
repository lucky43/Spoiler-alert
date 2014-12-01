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

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/assets.css" rel="stylesheet">
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
                <li><a href="tv.html">TV</a></li>
                <li><a href='classics.html'>Classics</a></li>
                <li><a href='videogames.html'>Video Games</a></li>
            
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
   <div id="blue">
    <div class="container">

      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2" ng-hide="loginObj.user">
          <h4>Submit your own spoiler!</h4>
          <p>Enter your spoiler and choose a category below</p>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!--  bluewrap -->

  <div class="container desc">
    <div class="row" ng-hide="loginObj.user">
      <br><br>      
      <div class="col-lg-6 col-lg-offset-3 ">
        <form id="comments" method="post" id="comments"  action="thanks.php">

           Title
            <input type="text" id='name' name='name' class="form-control"/>
            <br>
                                        
            <div class='row centered'>
            <form action="action_page.php">
            <select name="Category">
                <option value="Movies">Movies</option>
                <option value="Video Games">Video Games</option>
                <option value="Classics">Classics</option>
                <option value="TV">TV</option>
            </select>
            <br><br>
<textarea name='spoiler' rows='15' cols='40' id='comment'  /></textarea><br />
            <fieldset>
            <button type="submit" class="btn btn-info btn-xs">Submit</button><br><br>               
          </fieldset>   
          </div>       
        </form>               
      </div>
    </div> <!-- /.row -->
    
  </div> <!--/.container -->  


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    




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
