<?php 
include('session.php');
	if($session != NULL){
?>
<?php include 'header.php';?>
<div class="container">

		<h1 class="page-header text-center">Article Data</h1>
		<a href="add_article" class="btn btn-l btn-success" style="float:left;"> Add Article </a> 
		<div class="col-md-12" style="padding-top: 20px;">

			<table class="table table-bordered table-striped" id="example1">

				<thead >
					<th class="text-center">Article Image</th>
					<th class="text-center">Article Title</th>
					<th class="text-center">Article Department</th>
					<th class="text-center">Article Category</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						//database connection
						include('../db_con.php');

						$sql = "select * from article order by article_id desc";
						$query = $db->query($sql);
						while($row=$query->fetch_array()){
							?>
							<tr>
								<td class="text-center"><img src="images/<?php echo $row['article_file1']; ?>"  width="90px" height="70px" /></td>
								<td class="text-center"><?php echo $row['article_title']; ?></td>
								<td class="text-center"><?php echo $row['article_department']; ?></td>
								<td class="text-center"><?php echo $row['article_category']; ?></td>
								<td class="text-center"><a href="preview_article.php<?php echo '?article_id='.$row['article_id']; ?>"  class=" btn-sm btn-info"> Preview</a>
                            <a href="edit_article<?php echo '?article_id='.$row['article_id']; ?>" class=" btn-sm btn-warning"> Edit</a>
                            <a href="del_article.php<?php echo '?article_id='.$row['article_id']; ?>" onclick="return confirm('Are you sure you want to delete it?');" class=" btn-sm btn-danger"> Delete</a></td>
							</tr>
							<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<?php include 'footer.php';?>
	<?php 
	} else {
		header("Location:index.php");
	} ?>
	