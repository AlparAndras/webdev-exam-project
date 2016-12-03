<?php
	session_start();

	if (isset($_SESSION['userName'])) {
		if ($_SESSION['userType'] == 1) {
			header('location: index.php');
		} elseif ($_SESSION['userType'] == 0) {
			header('location: control-panel.php');
		}
	}


	$sUsers = file_get_contents("administration.json");
	$aUsers = json_decode($sUsers);

	if(isset($_POST['txtUserName']) && isset($_POST['txtPassword'])) {
		for($i = 0; $i < count($aUsers); $i++) {
			if($_POST['txtUserName'] == $aUsers[$i] -> username && $_POST['txtPassword'] == $aUsers[$i] -> password) {
				$_SESSION['userName'] = $aUsers[$i]->username;
				$_SESSION['userType'] = $aUsers[$i]->type;


				if($aUsers[$i] ->type == 1) {
					header('location: index.php');
				} elseif ($aUsers[$i] ->type == 0) {
					header('location: control-panel.php');
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="shortcut icon" href="img/favicon.png"  type='image/x-icon' />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		.login-page-user {
 			width: 360px;
  			padding: 8% 0 0;
  			margin: auto;
  			display: block;
		}

		.login-page-admin {
			width: 360px;
  			padding: 8% 0 0;
  			margin: auto;
		}

		.login {
			width: 720px;
			margin: auto;
		}

		.createUser {
			width: 720px;
			margin: auto;
		}

		.form {
			position: relative;
			z-index: 1;
			background: #FFFFFF;
			max-width: 360px;
			margin: 0 auto 100px;
			padding: 45px;
			text-align: center;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}

		.form input {
			font-family: "Roboto", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 100%;
			border: 0;
			margin: 0 0 15px;
			padding: 15px;
			box-sizing: border-box;
			font-size: 14px;
		}
	</style>

</head>
<body>
	<div class="login">
		<div class="row">
			<div class="login-page-user">
				<div id = "errorOnLogin">
					<p>Login <strong>for Admin :</strong></br> username : admin </br> pass.: 12 </p>
					<p>Login <strong>for User :</strong></br> username : user </br> pass.: 34 </p>
				</div>
				<div class="form">
					<form method="POST" action="">
						<input type="text" name="txtUserName" id="user" placeholder="username">
						<input type="password" name="txtPassword" id="password" placeholder="password">
						<button id="login" class="btn btn-success">Login</button>

					</form>
					<hr>
					<button id="createUser" class="btn btn-success" data-toggle="modal" data-target="#createUserModal">Create User</button>

				</div>
			</div>
		</div>
 	</div>



	<!-- <script>

	function statusChangeCallback(response) {
		console.log('statusChangeCallback');
		console.log(response);
		// The response object is returned with a status field that lets the
		// app know the current login status of the person.
		// Full docs on the response object can be found in the documentation
		// for FB.getLoginStatus().
		if (response.status === 'connected') {
			// Logged into your app and Facebook.
			testAPI();
		} else if (response.status === 'not_authorized') {
			// The person is logged into Facebook, but not your app.
			document.getElementById('status').innerHTML = 'Please log ' +
				'into this app.';
		} else {
			// The person is not logged into Facebook, so we're not sure if
			// they are logged into this app or not.
			document.getElementById('status').innerHTML = 'Please log ' +
				'into Facebook.';
		}
	}

	function checkLoginState() {
		FB.getLoginStatus(function(response) {
			statusChangeCallback(response);
		});
	}

	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1615857338710945',
			xfbml      : true,
			version    : 'v2.8'
		});
	};

	(function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "//connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	 }(document, 'script', 'facebook-jssdk'));

	 function testAPI() {
		console.log('Welcome!  Fetching your information.... ');
		FB.api('/me', function(response) {
			console.log('Successful login for: ' + response.name);
			document.getElementById('status').innerHTML =
				'Thanks for logging in, ' + response.name + '!';
		});
	}
</script> -->
</body>
</html>
