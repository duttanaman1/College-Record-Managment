<?php
session_start();

require("conection/connect.php");

$msg = "";
if (isset($_POST['btn_log'])) {
	$uname = $_POST['unametxt'];
	$pwd = $_POST['pwdtxt'];

	$sql = mysqli_query($con, "SELECT * FROM userparent_tbl
								WHERE username='$uname' AND password='$pwd'");

	$cout = mysqli_num_rows($sql);
	if ($cout > 0) {
		$row = mysqli_fetch_array($sql);
		if ($row['type'] == 'admin')
			$msg = "Login trov hery!.....";
		else
			header("location: view_parent.php");
	} else
		$msg = "Invalid login authentication, try again!";
}

?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css.map" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" />
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css" />
	<script src="https://use.fontawesome.com/05113e75b1.js"></script>
	<script src="https://kit.fontawesome.com/33cf5c8f49.js" crossorigin="anonymous"></script>

	<title>Vellore Institute Technology | College management System.</title>
	<style>
		body {
			margin: 0px;
		}

		.footer {
			-webkit-animation-duration: 2s;
			animation-duration: 2s;
			-webkit-animation-name: SkrrrPaPaPum;
			animation-name: SkrrrPapaPum;
		}

		@keyframes SkrrrPapaPum {
			0% {
				transform: scale(0.1);
				opacity: 0;
			}

			60% {
				transform: scale(1.2);
				opacity: 1;
			}

			100% {
				transform: scale(1);
			}
		}

		.footer {
			background-color: black;
			width: 100%;
			border-top: rgb(97, 96, 96);
			height: auto;
			border-top: rgb(97, 96, 96);
			margin-bottom: 0;
		}

		.footer-list {
			list-style-type: none;
			margin-bottom: 3px;
			color: #004492;
		}

		@media (max-width: 30em) {
			.footer-list {
				display: none;
			}
		}

		.footer-list li {
			display: inline;
			padding-left: 20px;
			cursor: pointer;
			padding: 2rem;
		}

		.footer-list li a {
			text-decoration: none;
			font-size: 15px;
			color: rgb(158, 158, 158);
			margin: 0px;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="container2">
			<div class="h1_pos">
				<h1>College authorities for only Parents. </h1>
			</div><br><br><br>
			<label class="label"><i class="fas fa-user"></i></label>

			<input type="text" class="form-control input" name="unametxt" placeholder="Username" title="Enter username here" /><br>
			<label class="label"><i class="fas fa-lock"></i></label>
			<input type="password" class="form-control input" name="pwdtxt" placeholder="Password" title="Enter username here" /><br>

			<input type="submit" href="#" class="btn btn-primary" name="btn_log" value="Sign in" style="float: right;" />
		</div>
	</div>

	<h2 style="color: #3a28a5; text-align: center;">
		<?php echo $msg; ?>
	</h2>
	</div>
	<div class="footer">
		<ul class="footer-list">
			<li><a href="#">About</a> |</li>
			<li><a href="#">Blog</a> |</li>
			<li><a href="#">FAQs</a> |</li>
			<li><a href="admission.php">Admission</a> |</li>
			<li><a href="#">Contact us</a></li>
		</ul>
	</div>
</body>

</html>