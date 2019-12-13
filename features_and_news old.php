<?php include 'header.php';?>
	

<section class="blog bgwhite p-t-40 p-b-70">
		<div class="container">
			<div class="sec-title p-b-40">
				<h3 class="m-text5 t-center">
					Features and News
				</h3>
			</div>
			<div class="row">
				<?php
					//database connection
					include('db_con.php');
					$fetch=mysqli_query($db, "select * from article where article_category='Features and News' ");
					while ($row= mysqli_fetch_array($fetch) ){
				?>

				<div class="col-md-4 m-b-30 hov-img-zoom">
					<img src="admin/images/<?php echo $row['article_file1']; ?>" alt="IMG" >
					<div class=" sizefull ab-t-l flex-col-c-m">
						<h4 class="m-textn t-center w-size3 p-b-8">
							<?php echo $row['article_department']; ?>
						</h4>
						<p class="t-center  m-textn2 w-size4">
							<?php echo $row['article_title']; ?>
						</p>
						<div class="w-size2 p-t-75">
							<a href="#" class="flex-c-m  bo-rad-23 hov1 m-textq ">
								Read more
							</a>
						</div>
					</div>
				</div>

				<?php
					}
				?>


			</div>
			</div>
		</div>
	</section>
	

<?php include 'footer.php';?>
