<?php include 'header.php';?>
<?php
$get_id = $_GET['article'];
?>
	 <main class="mt-5">
    <div class="container">

    	<div class="sec-title">
				<h3 class="m-text5 t-center">
					<?php echo $get_id; ?>
				</h3>
		</div>
      <hr class="p-b-10">

      <!--Section: Cards-->
      <section class="text-center">

        <!--Grid row-->
        <div class="row mb-4 wow fadeIn">
        		<?php
					//database connection
					include('db_con.php');
					$fetch=mysqli_query($db, "select * from article where article_category='$get_id' order by article_id desc");
					while ($row= mysqli_fetch_array($fetch) ){
				?>

        
		          <div class="col-lg-4 col-md-6 mb-4">

		            <!--Card-->
		            <div class="card  hov-img-zoom">

		              <!--Card image-->
		              <div class="view overlay">
		                <img src="admin/images/<?php echo $row['article_file1']; ?>" class="card-img-top"
		                  alt="">
		                <a href="https://mdbootstrap.com/education/tech-marketing/automated-app-introduction/" target="_blank">
		                  <div class="mask rgba-white-slight"></div>
		                </a>
		              </div>

		              <!--Card content-->
		              <div class="card-body">
		                <!--Title-->
		                <h6 class="card-title"><?php echo $row['article_department']; ?></h6>
		                <!--Text-->
		                <p class="card-text text-center font-weight-bold"><?php echo $row['article_title']; ?></p>
		                <div class="p-t-10">
		                <a href="read_article<?php echo '?article_token='.$row['article_token']; ?>" 
		                  class="btn bgi btn-md ">Read more
		                </a>
		            	</div>
		              </div>

		            </div>
		            <!--/.Card-->

		          </div>
		          	<?php
					}
				?>
        </div>
        <!--Grid row-->

       

      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Main layout-->

<?php include 'footer.php';?>
