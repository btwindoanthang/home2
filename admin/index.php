<!--Funtion that calls header, footer, sidebar, navbar, error controllers
======================= -->

<!-- Header
================================================== -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>TOGEPI_TOOLS - [00101] Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<!-- Styles -->
<link href="../htdocs/css/sidebar.css" rel="stylesheet">
<link href="../htdocs/css/bootstrap.css" rel="stylesheet">
<link href="../htdocs/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="../htdoc/css/font-awesome.css">
<!--[if IE 7]>
  <link rel="stylesheet" href="/css/font-awesome-ie7.css">
<![endif]-->

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="/js/html5shiv.js"></script>
<![endif]-->

<style type="text/css">

</style>


<!-- Fav and Touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../img/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../img/ico/favicon.png">

<! -- Google Analytics Code -->
<script type="text/javascript">
	//<! -- Google Analytics Code -->
</script>

</head>
<body>

	<div class="container-fluid">
            <form id="frm_signin" class="form-signin" method="POST" action="./login.php">
		<h2 class="form-signin-heading">Please sign in</h2>
			<div class="alert alert-block" id="msg_error">
			</div>
                <input id="log_on_nm" name="log_on_nm" type="text" maxlength="50" class="input-block-level" placeholder="Log in Name">
                <input id="psd" name="psd" type="password" maxlength="20" class="input-block-level" placeholder="Password">
                <button id="signin" class="btn btn-large btn-primary" type="submit">Sign in</button>
	  </form>

	</div> <!-- class="container -->

<!-- Footer
================================================== -->
		<footer class="footer">
		  <div class="container-fluid">
			<p>&copy <a href="#" target="_blank">Togepi Inc.</a>, 2015 - 2018</p>
		  </div>
		</footer>
	</div> <!-- TOP ROW FLUID FOR CONTENT -->
</div> <!-- class="container -->




<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../htdocs/js/jquery.js"></script>
<script src="../htdocs/js/bootstrap.js"></script>
<script src="../htdocs/js/admin/login.js"></script>

<!-- Transitions
================================================== -->
<script>
</script>

</body>
</html>
