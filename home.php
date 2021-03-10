<?php
session_start();
if(empty($_SESSION["id"])) {
	header('location:index.php');
}
require_once("dbcontroller.php");
$db_handle = new DBController();
				//A
$query = "SELECT * FROM `donors` WHERE `bloodtype`='A' ";
$result = $db_handle->numRows($query);
	if (!empty($result)){
		$numOfDonorsA = $result;
	}else{
		$numOfDonorsA = 0;
	}
				//B
$query = "SELECT * FROM `donors` WHERE `bloodtype`='B' ";
$result = $db_handle->numRows($query);
	if (!empty($result)){
		$numOfDonorsB = $result;
	}else{
		$numOfDonorsB = 0;
	}
				//AB
$query = "SELECT * FROM `donors` WHERE `bloodtype`='AB' ";
$result = $db_handle->numRows($query);
	if (!empty($result)){
		$numOfDonorsAB = $result;
	}else{
		$numOfDonorsAB = 0;
	}
				//O
$query = "SELECT * FROM `donors` WHERE `bloodtype`='O' ";
$result = $db_handle->numRows($query);
	if (!empty($result)){
		$numOfDonorsO = $result;
	}else{
		$numOfDonorsO = 0;
	}
				//A-
$query = "SELECT * FROM `donors` WHERE `bloodtype`='A-' ";
$result = $db_handle->numRows($query);
	if (!empty($result)){
		$numOfDonorsAm = $result;
	}else{
		$numOfDonorsAm = 0;
	}
 				//B-
$query = "SELECT * FROM `donors` WHERE `bloodtype`='B-' ";
$result = $db_handle->numRows($query);
	if (!empty($result)){
		$numOfDonorsBm = $result;
	}else{
		$numOfDonorsBm = 0;
	}
				//AB-
$query = "SELECT * FROM `donors` WHERE `bloodtype`='AB-' ";
$result = $db_handle->numRows($query);
	if (!empty($result)){
		$numOfDonorsABm = $result;
	}else{
		$numOfDonorsABm = 0;
	}
				//O-
$query = "SELECT * FROM `donors` WHERE `bloodtype`='O-' ";
$result = $db_handle->numRows($query);
	if (!empty($result)){
		$numOfDonorsOm = $result;
	}else{
		$numOfDonorsOm = 0;
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
							<span class="avatar"><a href="index.php"><h1>BloodBase Uganda</h1></a></span>
							<nav class="navbar">
								<a href="profile.php"><h2 class="nav-logo"><?=$_SESSION["id"]['name'];?></h2></a>
								<a href="logout.php"><p class="nav-item">Logout</p></a>
							
							</nav>
						</header>
						
						<div id="wrapdiv" class="responsive-sm">
							<div class="bloodtype responsive-sm">
							
									<button class="bloodtype" data-toggle="modal" data-target="#bloodyA">A    <span class="badge badge-primary badge-pill" ><?=$numOfDonorsA;?></span></button>
								
							</div>
							<div class="bloodtype responsive-sm"> 
								
									<button class="bloodtype" data-toggle="modal" data-target="#bloodyB">B    <span class="badge badge-primary badge-pill" ><?=$numOfDonorsB;?></span></button>
								
							</div>
							<div class="bloodtype"> 
								
									<button class="bloodtype" data-toggle="modal" data-target="#bloodyAB">AB    <span class="badge badge-primary badge-pill" ><?=$numOfDonorsAB;?></span></button>
								
							</div>
							<div class="bloodtype"> 
								
									<button class="bloodtype" data-toggle="modal" data-target="#bloodyO">O    <span class="badge badge-primary badge-pill" ><?=$numOfDonorsO;?></span></button>
								
							</div>
							<div class="bloodtype"> 
								
									<button class="bloodtype" data-toggle="modal" data-target="#bloodyAm">A-    <span class="badge badge-primary badge-pill" ><?=$numOfDonorsAm;?></span></button>
								
							</div>
							<div class="bloodtype"> 
								
									<button class="bloodtype" data-toggle="modal" data-target="#bloodyBm">B-    <span class="badge badge-primary badge-pill" ><?=$numOfDonorsBm;?></span></button>
								
							</div>
							<div class="bloodtype"> 
								
									<button class="bloodtype" data-toggle="modal" data-target="#bloodyABm">AB-    <span class="badge badge-primary badge-pill" ><?=$numOfDonorsABm;?></span></button>
								
							</div>
							<div class="bloodtype">
								
									<button class="bloodtype" data-toggle="modal" data-target="#bloodyOm">O-    <span class="badge badge-primary badge-pill" ><?=$numOfDonorsOm;?></span></button>
								
							</div>
						</div>
						<hr />
						
						<footer>
							<ul class="icons">
								<li><a href="http://twitter.com/bloodbaseug" target="_blank" class="icon brands fa-twitter">Twitter</a></li>
								<li><a href="http://instagram.com/bloodbaseug" target="_blank" class="icon brands fa-instagram">Instagram</a></li>
								<li><a href="http://facebook.com/bloodbaseug" target="_blank" class="icon brands fa-facebook-f">Facebook</a></li>
							</ul>
							<div class="">
								<a href="http://twitter.com/bloodbaseug" class="">About</a>
								|
								<a href="http://instagram.com/bloodbaseug" class=" ">Contact</a>
							</div>
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>Copyright&copy; </li><li> Rooters Hub </li><li><?=date('Y');?></li>
						</ul>
					</footer>

			</div>
		<?php require_once("blood.php"); ?>

		<!-- Scripts -->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

	</body>
</html>