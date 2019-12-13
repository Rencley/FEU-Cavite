<?php include 'header.php';?>
<section class="bg6 p-t-20 p-b-25">
	<?php
		//database connection
		include('db_con.php');
		$get_id = $_GET['article_token']; 
		$fetch=mysqli_query($db, "select * from article where article_token='$get_id' ");
		while ($row= mysqli_fetch_array($fetch) ){
	?>
		<div class="container">
			<div class="row">
				<div class="p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40 p-l-20 p-r-20">
							<div class="blog-detail-img wrap-pic-w">
								<img src="admin/images/<?php echo $row['article_file1']; ?>" alt="IMG-BLOG">
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
<?php include 'footer.php';?>