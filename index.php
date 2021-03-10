<?php
require_once("dbcontroller.php");

$db_handle = new DBController();
if (isset($_POST['email']))	{
	session_start();
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
	$query = "SELECT `id` FROM `donors` WHERE `email`='$email' AND `password`=SHA2('$password', 256)";
	$result = $db_handle->numRows($query);
	$userQuery = "SELECT `id`,`name` FROM `donors` WHERE `email`='$email' AND `password`=SHA2('$password', 256)";
	$userName = $db_handle->runQuery($userQuery);
	if ($result == 0) {
		$message = 'Wrong Credentials!';
	}else{
		foreach ($userName as $usethisID):
			$_SESSION["id"] = $usethisID;
		endforeach;
		//$_SESSION["id"] =$userName[1];
		header('location:home.php');
	}
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>BloodBase | UGANDA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar"><h1>BloodBase Uganda</h1></span>
                            <button data-toggle="modal" data-target="#register" >Register</button>
						</header>
						<?php if(isset($message)){?><h2 class="text-danger"><?=$message;}?></h2>
						<form id="login" method="post" action="index.php">
							<div class="fields">
								<div class="field">
									<input type="email" name="email" id="email" placeholder="Email" />
								</div>
								<div class="field">
									<input type="password" name="password" id="password" placeholder="Password" />
								</div>
								<div class="field">
									<label>Are you a robot?</label>
									<input type="radio" id="robot_yes" name="robot" /><label for="robot_yes">Yes</label>
									<input type="radio" id="robot_no" name="robot" /><label for="robot_no">No</label>
								</div>
							</div>
							<ul class="actions special">
								<li><a href="#" class=""><button type="submit">Login</button></a></li>
							</ul>
							
									<button type="button" id="btnq">Ha!</button>
						</form>
						<hr />
						
						
						<footer>
							<ul class="icons">
								<li><a href="http://twitter.com/bloodbaseug" target="_blank" class="icon brands fa-twitter">Twitter</a></li>
								<li><a href="http://instagram.com/bloodbaseug" target="_blank" class="icon brands fa-instagram">Instagram</a></li>
								<li><a href="http://facebook.com/bloodbaseug" target="_blank" class="icon brands fa-facebook-f">Facebook</a></li>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>Copyright&copy; </li><li> Rooters Hub </li><li>All Rights Reserved</li>
						</ul>
					</footer>

			</div>
		
		<!-- Register Modal -->
			<div id="register" class="modal fade" role="dialog" tabindex="-1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Register</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
						<div class="modal-body">
							<form id="register" method="post" action="signup.php">
								<div class="fields">
									<div class="field">
										<input type="text" name="name" id="name" placeholder="Name" reqiured/>
									</div>
									<div class="field">
										<input type="email" name="email" id="email" placeholder="Email" required/>
									</div>
									<div class="field">
										<select name="bloodtype" id="blood" required>
											<option value="">Blood Type</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="AB">AB</option>
											<option value="O">O</option>
											<option value="A-">A-</option>
											<option value="B-">B-</option>
											<option value="AB-">AB-</option>
											<option value="O-">O-</option>
										</select>
									</div>
									<div class="field">
										<input type="tel" name="phone" id="phone" placeholder="Phone" required/>
									</div>
									<div class="field">
										<input type="text" name="location" id="location" placeholder="Location" />
									</div>
									<div class="field">
										<input type="password" name="password" id="password" placeholder="Password" required/>
									</div>
								</div>
								<ul class="actions special">
									<li><button type="submit">Save</button></li>
								</ul>
							</form>
						</div>
					</div>
				</div>
			</div>

		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/main.js"></script>
    	<script src="assets/js/bootstrap.min.js"></script>

	</body>
</html>