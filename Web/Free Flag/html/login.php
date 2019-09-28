<?php
	require('secret.php');
	if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && !empty($_POST['username'])){
		$usr = $_POST['username'];
		$pwd = $_POST['password'];
		if(preg_match('/khoabda/',$usr) || preg_match('/khoabda/',$pwd)){
			echo '<script>alert(/Not try to hack/);</script>';
		}
		else{
			$username = 'username='.$usr;
			$sign = 'sign='.md5($secret.$username);
			setcookie('hash',base64_encode($sign));
			setcookie('data',base64_encode($username));
			header('Location: index.php');
		}
	}	
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="login.php">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" placeholder="Username" required="required" name="username" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <!-- <a class="btn btn-primary btn-block" href="login.php">Login</a> -->
	<input type="submit" />
        </form>
        <div class="text-center">
        <!--  <a class="d-block small mt-3" href="register.html">Register an Account</a> -->
        <!--  <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>