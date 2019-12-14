<?php include 'header.php';?>
<section class="bg6 p-t-20 p-b-25">
	<?php
		//database connection
		include('db_con.php');
		$get_id = $_GET['calendar']; 
	?>
		<div class="container">
			<div class="row">
				<div class="p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40 p-l-20 p-r-20">
							<div class="blog-detail-img wrap-pic-w text-center" >
								<img src="img/<?php echo $get_id; ?>" alt="IMG-BLOG"  style="width: 80%; height: 80;">
							</div>
							
							

							
						</div>

					
					</div>
				</div>

				
			</div>
		</div>
	</section>	
<?php include 'footer.php';?>