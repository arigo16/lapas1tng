<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login Admin - Lapas Kelas 1 Kota Tangerang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/styles.css" rel="stylesheet">
	
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="login.php">Login Admin - Lapas Kelas 1 Kota Tangerang</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
							<h6>Login</h6>
							<form action="controller/login.php" method="POST">
								<input class="form-control" type="text" placeholder="Username" name="username" value="arigo" required>
								<input class="form-control" type="password" placeholder="Password" name="password" value="12345" required>
								<?php  isset($_SESSION['error']) ? $e=$_SESSION['error'] : $e=""; echo $e; session_destroy();?>
								<button type="submit" class="btn btn-primary signup">Login</button>
								<a href="../" class="btn btn-danger signup">Kembali</a>
							</form>   
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>