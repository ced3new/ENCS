

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="title" content="ENCS">
	<meta name="description" content="ENCS.">
	<meta name="keywords" content="">
	<meta name="language" content="en">

	<title>ENCS</title>

	<!-- Bootstrap core CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

	<!-- Custom styles for this template -->
		<link href="encscss.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="../../assets/js/html5shiv.js"></script>
        <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

	
	

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="/js/html5shiv.js"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-glyphicon-precomposed" sizes="144x144" href="/img/apple-touch-glyphicon-144-precomposed.png">
	<link rel="apple-touch-glyphicon-precomposed" sizes="114x114" href="/img/apple-touch-glyphicon-114-precomposed.png">
	<link rel="apple-touch-glyphicon-precomposed" sizes="72x72" href="/img/apple-touch-glyphicon-72-precomposed.png">
	<link rel="apple-touch-glyphicon-precomposed" href="/img/apple-touch-glyphicon-57-precomposed.png">
	<link rel="shortcut icon" href="/img/favicon.png">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script><style type="text/css"></style>
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript" src="http://cdn.transparensee.com/lib/jquery-plugin/touchpunch/0.2.2/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="/js/scripts.min.js"></script>
	
	
</head>

<!-- Wrap all page content here -->
<div id="wrap" class="">
    <!-- Fixed navbar -->
        <?php
        include 'navbar.php';
        ?>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- Begin page content -->

    <div class="container bgimg">
      <div class="login-form borderradius" >
        <form class="form-horizontal" role="form" action="login.inc.php" method="POST">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" id="inputEmail1" placeholder="Username" name="username">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
    <div class="col-lg-10">
      <input type="password" class="form-control" id="inputPassword1" placeholder="Password" name="password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
      
      </div>


      

    </div>
</div>
<div id="footer" class="">
    <div class="container">
        <p class="text-muted credit">Designed and Developed by <a href="http://www.cmdtechnologies.com" class="">CMD Technologies</a> .</p>
    </div>
</div>


</html>




