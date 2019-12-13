<?php 
include('session.php');
	if($session != NULL){
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FEU Cavite</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->

	<link rel="icon" type="image/png" href="../assets/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">




</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->  
		<div class="container-menu-header">
			<div class="topbar ">
				<div class="topbar-social "></div>

				<span class="topbar-child1">
					#FutureReadyLearning
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						
					</span>

				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="dashboard" class="logo">
					<img src="../assets/images/icons/FEUlogo.png" alt="IMG-LOGO">
				</a>

				<!-- Header Icon -->
				<div class="header-icons">
					
					<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li  class="text-light">
								<a href="home">Logout</a>
								
							</li>
						</ul>
					</nav>
				</div>

				<!-- Menu -->
				
				<!-- Header Icon -->
				
		</div>
	</div>
</div>
</header>

<section class="bgwhite p-t-20 p-b-25">
	<?php
		//database connection
		include('../db_con.php');
		$get_id = $_GET['article_id']; 
		$fetch=mysqli_query($db, "select * from article where article_id='$get_id' ");
		while ($row= mysqli_fetch_array($fetch) ){
	?>
		<div class="container">
			<div class="row">
				<div class="p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40 p-l-20 p-r-20">
							<div class="blog-detail-img wrap-pic-w">
								<img src="images/<?php echo $row['article_file1']; ?>" alt="IMG-BLOG">
							</div>
							
							<div class="blog-detail-txt p-t-25">
								<h4 class="p-b-11 m-text24">
									<?php echo $row['article_title']; ?>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">

									<span>
										<?php echo $row['publish_date']; ?>
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										<?php echo $row['article_department']; ?>
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										<?php echo $row['article_category']; ?>
										<span class="m-l-3 m-r-6">|</span>
									</span>
								</div>

								<p class="p-b-25">
									<?php echo $row['article_paragraph1']; ?>
								</p>
								
								<p class="p-b-25">
									<?php echo $row['article_paragraph2']; ?>
								</p>
								<p class="p-b-25">
									<?php echo $row['article_paragraph3']; ?>
								</p>
							</div>

							
						</div>

					
					</div>
				</div>

				
			</div>
		</div>
		<?php
			}
		?>
	</section>

<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	


<!--===============================================================================================-->
	<script type="text/javascript" src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../assets/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../assets/vendor/select2/select2.min.js"></script>
	
<!--===============================================================================================-->
	<script type="text/javascript" src="../assets/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="../assets/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="../assets/js/map-custom.js"></script>

<!--===============================================================================================-->
	<script src="../assets/js/main.js"></script>

	<!--===============================================================================================-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- data table js -->
	<script src="../assets/datatable/jquery.dataTables.min.js"></script>
	<script src="../assets/datatable/dataTables.bootstrap.min.js"></script>


</body>
</html>
	<?php 
	} else {
		header("Location:index.php");
	} ?>
	