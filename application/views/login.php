<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="aplikasi sederhana untuk menampilkan pengumuman hasil ujian nasional secara online">
    <meta name="author" content="slamet.bsan@gmail.com">
    <meta name="author" content="anhar - go2anhar@gmail.com">
    
    <title>Pengumuman Kelulusan</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= site_url('assets') ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= site_url('assets') ?>/css/jasny-bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles down here -->
    <style type="text/css">
	body {
	  padding-top: 40px;
	  padding-bottom: 40px;
	  background-color: #eee;
	}

	.form-signin {
	  max-width: 330px;
	  padding: 15px;
	  margin: 0 auto;
	}
	.form-signin .form-signin-heading,
	.form-signin .checkbox {
	  margin-bottom: 10px;
	}
	.form-signin .checkbox {
	  font-weight: normal;
	}
	.form-signin .form-control {
	  position: relative;
	  height: auto;
	  -webkit-box-sizing: border-box;
		 -moz-box-sizing: border-box;
			  box-sizing: border-box;
	  padding: 10px;
	  font-size: 16px;
	}
	.form-signin .form-control:focus {
	  z-index: 2;
	}
	.form-signin input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-right-radius: 0;
	  border-bottom-left-radius: 0;
	}
	.form-signin input[type="password"] {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
    </style>
</head>

<body>
	<div class="container">
		<form class="form-signin" method="post" action="<?= site_url('auth/cekLogin') ?>">
			<h2 class="form-signin-heading">Silahkan login</h2>
			<label for="inputUsername" class="sr-only">Username</label>
			<input type="text" name="uname" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="upass" id="inputPassword" class="form-control" placeholder="Password" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
		</form>
	
    </div> <!-- /container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= site_url('assets') ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= site_url('assets') ?>/js/bootstrap.min.js"></script>
    <script src="<?= site_url('assets') ?>/js/jasny-bootstrap.min.js"></script>
</body>
</html>