<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" type="text/css" href="css/login.css" />

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css.map" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>



	<title>Vellore Institute Technology | College management System.</title>
	<style>
		.listview_1_of_3 {
			height: 130px;
		}


		.about {
			background-color: rgb(233, 233, 233);
			padding: 1.5rem;
			height: auto;
			width: 100%;

			display: inline-block;
		}

		body {
			background: none;
			background-color: rgb(255, 198, 198, 0.3);
			font-family: Comic Sans, Comic Sans MS, cursive;
		}

		/*applying animation to all the division elements*/
		div {
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


		/* Slideshow container */
		.slideshow-container {
			max-width: 70%;
			height: auto;
			position: relative;
			margin: auto;

			border-radius: 5px 5px 8px 8px;
		}

		.slideshow-container:hover {
			box-shadow: 0 12px 16px 0 rgba(0, 9, 24, 0.6),
				0 17px 50px 0 rgba(0, 0, 0, 0.19);
		}

		/* Hide the images by default */
		.mySlides {
			display: none;
		}

		/* Next & previous buttons */
		.prev,
		.next {
			cursor: pointer;
			position: absolute;
			top: 50%;
			width: auto;
			margin-top: -22px;
			padding: 16px;
			color: white;
			font-weight: bold;
			font-size: 18px;
			transition: 0.6s ease;
			border-radius: 0 3px 3px 0;
			user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover,
		.next:hover {
			background-color: rgba(0, 0, 0, 0.8);
		}




		/* Number text (1/3 etc) */
		.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
			cursor: pointer;
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
		}

		.active,
		.dot:hover {
			background-color: #717171;
		}

		/* Fading animation */
		.fade {
			-webkit-animation-name: fade;
			-webkit-animation-duration: 1.5s;
			animation-name: fade;
			animation-duration: 1.5s;
		}


		@-webkit-keyframes fade {
			from {
				opacity: .4
			}

			to {
				opacity: 1
			}
		}

		@keyframes fade {
			from {
				opacity: .4
			}

			to {
				opacity: 1
			}
		}

		/*---------------login aimation css--------------------*/
		#login-box {
			display: none;
		}

		/*-----------------footer-----------*/
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
	<div class="header">
		<div class="wrap">
			<!--start-logo-->
			<div class="logo">
				<a href="index.php" style="font-size: 30px;">School Managment System</a>
			</div>
			<!--end-logo-->
			<!--start-top-nav-->
			<div class="top-nav">
				<ul>
					<li class="active"><a id="home">Home</a></li>

					<li><a href="admission.php">Admission</a></li>
					<li><a href="gallary.php"> Gallary</a></li>
					<li><a id="login">Login</a></li>
				</ul>
			</div>
			<div class="clear"> </div>
			<!--end-top-nav-->
		</div>
		<!--end-header-->
	</div>
	<div class="clear"> </div>

	<div style="height:auto;">
		<!-- Slideshow container -->
		<div class="slideshow-container">

			<!-- Full-width images with number and caption text -->
			<div class="mySlides fade">
				<div class=" numbertext">1 / 3</div>
				<img src="images/1.jpg" style="width:100%; height:400px;">

			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="images/2.jpg" style="width:100%;height:400px;">

			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="images/3.jpg" style="width:100%; height:400px;">
				< </div> <!-- Next and previous buttons -->
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<!-- The dots/circles -->

		</div>
		<div class="aboutus" style="border-bottom:10px solid #221fe0;width:100%; background-color: burlywood; align-content: center;height: auto;">
			<h1 style="color:rgb(30, 4, 99);font-size:35px">
				<center>VIT UNIVERSITY</center>
			</h1>
			<div class="about">

				<hr>
				<p style="color:rgb(30, 4, 99);">
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores accusantium, esse, voluptates aut eos animi veritatis molestiae obcaecati iusto et, itaque dolore amet unde laborum natus odit enim non! Praesentium!
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi ab velit laudantium totam eum molestias dolorem nam mollitia, accusamus, illo quibusdam error nisi est, ex natus iure nostrum ad saepe?
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, neque. Laboriosam, sequi atque perspiciatis necessitatibus, earum fugit iusto asperiores eum consequatur voluptates iure commodi libero nobis quae eligendi adipisci cum.
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur amet tempore similique itaque expedita. Dolor sit facilis provident ab, cum eos eius assumenda minus ex aperiam ipsa voluptate, voluptatem rem?

				</p>
			</div>
		</div>
		<div>
			<div class="content-grids" id="login-box">
				<div class="wrap">
					<div class="section group">


						<div class="listview_1_of_3 images_1_of_3">
							<div class="listimg listimg_1_of_2">
								<img src="images/student.png">
							</div>
							<div class="text list_1_of_2">
								<h3>Students Login</h3>

								<div class="button"><span><a href="loginStudent.php">Click Here</a></span></div>
							</div>
						</div>

						<div class="listview_1_of_3 images_1_of_3">
							<div class="listimg listimg_1_of_2">
								<img src="images/teacher.png">
							</div>
							<div class="text list_1_of_2">
								<h3>Faculty Login</h3>

								<div class="button"><span><a href="loginFaculty.php">Click Here</a></span></div>
							</div>
						</div>


						<div class="listview_1_of_3 images_1_of_3">
							<div class="listimg listimg_1_of_2">
								<img src="images/parent.png">
							</div>
							<div class="text list_1_of_2">
								<h3>Parent Login</h3>

								<div class="button"><span><a href="loginParent.php">Click Here</a></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer col-md-12">
				<ul class="footer-list">
					<li class="col-md-2"><a href="#">About</a> |</li>
					<li class="col-md-2"><a href="#">Blog</a> |</li>
					<li class="col-md-2"><a href="#">FAQs</a> |</li>
					<li class="col-md-2"><a href="admission.php">Admission</a> |</li>
					<li class="col-md-2"><a href="#">Contact us</a></li>
				</ul>
			</div>





</body>
<script type="text/javascript">
	var slideIndex = 0;
	showSlides();

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {
			slideIndex = 1
		}
		slides[slideIndex - 1].style.display = "block";
		setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
</script>

</html>