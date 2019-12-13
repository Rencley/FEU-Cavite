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
<!--===============================================================================================-->
</head>
<body class="animsition">

  <!-- Header -->
  <header class="header1">
    <!-- Header desktop -->  
    <div class="container-menu-header">
      <div class="topbar ">
        <div class="topbar-social ">
        </div>

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

        <!-- Menu -->
        
        <!-- Header Icon -->
        
    </div>
  </header>

<section class="bgwhite p-t-66 p-b-60">
			<div class="container text-center">
				

					<div class="col-md-12 p-b-30">
						<form class="leave-comment" method="post" action="upload_article" enctype="multipart/form-data">
							<h4 class="m-text26 p-b-36 p-t-15">
								Article Upload
							</h4>
							<div class="of-hidden size15 m-b-15">

								<input class="form-control" type="text" name="article_title" placeholder="Title of Article">
							</div>

							<div class=" of-hidden size15 m-b-15">
								<input class="form-control" type="text" name="article_writer" placeholder="Article Writer">
							</div>
							<div class="size15 m-b-15">
							<select class="form-control" name="article_department">
						        <option value="">Select Department</option>
						        <option value="Basic Education Department">Basic Education Department</option>
						        <option value="Senior High School">Senior High School</option>
						        <option value="Higher Education Department">Higher Education Department</option>
					        </select>
					        </div>
					        <div class="size15 m-b-15">
							<select class="form-control" name="article_category">
						        <option value="">Select Category</option>
						        <option value="Features and News">Features and News</option>
						        <option value="Events and Activities">Events and Activities</option>
						        <option value="Updates and Announcements">Updates and Announcements</option>
						        <option value="Campus and Community">Campus and Community</option>
					        </select>
					        </div>

							<div class="bo4 of-hidden size15 m-b-15">
								 <input type="file" class="form-control-file" placeholder="Image" name="image">
							</div>
							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-15" name="article_paragraph1" placeholder="Paragraph 1"></textarea>
							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-15" name="article_paragraph2" placeholder="Paragraph 2"></textarea>
							<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-15" name="article_paragraph3" placeholder="Paragraph 3"></textarea>

							<div class="w-size25">
								<!-- Button -->
								<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" name="add_article">
									Upload
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<?php include 'footer.php';?>