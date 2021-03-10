<?php
require_once("dbcontroller.php");
session_start();
if(empty($_SESSION["id"])) {
	header('location:index.php');
}
$userid = $_SESSION["id"]['id'];
$username = $_SESSION["id"]['name'];
$db_handle = new DBController();
$query = "SELECT * FROM `donors` WHERE `id`='$userid' AND `name`='$username' ";
$result = $db_handle->runQuery($query);

if (!empty( $_POST['email'])) {
	$email = $_POST['email'];
}
if (!empty( $_POST['phone'])) {
	$phone = $_POST['phone'];
}
if (!empty( $_POST['location'])) {
	$location = $_POST['location'];
}
if (isset($email)) {
	$query = "UPDATE `donors` SET `email` = '$email' WHERE `donors`.`id` ='$userid'  ";
	$db_handle->updateQuery($query);
	echo "<meta http-equiv='refresh' content='0'>";
}
if (isset($phone)) {
	$query = "UPDATE `donors` SET `phone` = '$phone' WHERE `donors`.`id` ='$userid'  ";
	$db_handle->updateQuery($query);
	echo "<meta http-equiv='refresh' content='0'>";
}
if (isset($location)) {
	$query = "UPDATE `donors` SET `location` = '$location' WHERE `donors`.`id` ='$userid'  ";
	$db_handle->updateQuery($query);
	echo "<meta http-equiv='refresh' content='0'>";
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
		<link rel="stylesheet" href="assets/css/profile.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar"><a href="home.php"><h1>BloodBase Uganda</h1></a></span>
							<p>Profile</p>
							<nav class="navbar">
								<a href="profile.php"><button><h2 class="nav-logo"><?=$_SESSION["id"]['name'];?></h2></button></a>
								<a href="logout.php"><button class="nav-item"><p class="nav-item">Logout</p></button></a>
							
							</nav>
						</header>
						<div id="profile" class="responsive">
							<?php 

							if (!empty($result)){
								foreach ($result as $donor):
							?>
								<p>Name: <?=htmlspecialchars($donor['name'], ENT_QUOTES, 'UTF-8')?></p>
								<p>Email: <?=htmlspecialchars($donor['email'], ENT_QUOTES, 'UTF-8')?>   <button id="editButton" onclick="showForm(form1)">edit</button></p>
									<form id="hiddenForm1" class="form-hidden" method="post">
										<input type="text" name="email" />
										<button type="submit">save</button>
									</form>
								<p>Phone: <?=htmlspecialchars($donor['phone'], ENT_QUOTES, 'UTF-8')?>   <button onclick="showForm(form2)" id="editButton">edit</button></p>
									<form id="hiddenForm2" class="form-hidden" method="post">
										<input type="tel" name="phone" />
										<button type="submit">save</button>
									</form>
								<p>Location: <?=htmlspecialchars($donor['location'], ENT_QUOTES, 'UTF-8')?>   <button id="editButton" onclick="showForm(form3)">edit</button></p>
									<form id="hiddenForm3" class="form-hidden" method="post">
										<input type="text" name="location" />
										<button type="submit">save</button>
									</form>
						<?php
								endforeach;
							}else{
								echo '<p>Profile not found!</p>';
							}
						?>
						</div>
						
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

		<!-- Scripts -->
		   <script type="text/javascript" src="assets/js/main.js" ></script>

	</body>
</html>
