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

    <title>Spoiler Alert!</title>

    <!-- Bootstrap core CSS -->
    <link href="style.css" rel ="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php $query = "select title from videogames"; ?>
<?php $result=mysql_query($query) ?>
<?php $array = mysql_fetch_array($result); ?>


    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Spoiler Alert!</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Movies</a></li>
            <li><a href="#">Television series</a></li>
            <li><a href="#">Books</a></li>
	    <li><a href="#">Video Games</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">place holder</a></li>

            <li><a href="#"><?php echo $array[0] ?></a></li>
            <li><a href="#"><?php echo $array[1] ?></a></li>
            <li><a href="#">place holder</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">place holder</a></li>
            <li><a href="">place holder</a></li>
            <li><a href="">place holder</a></li>
            <li><a href="">place holder</a></li>
            <li><a href="">place holder</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">place holder</a></li>
            <li><a href="">place holder</a></li>
            <li><a href="">place holder</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Place holder</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">place holder</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">place holder</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">place holder</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">place holder</span>
            </div>
          </div>

          <h2 class="sub-header">Place holder</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
                <tr>
                  <td>1,016</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                  <td>place holder</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

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

<!-- style and scripts go here (bootstrap) --!>


</head>
<body>

<!-- content will go here --!>

</body>
</html>
