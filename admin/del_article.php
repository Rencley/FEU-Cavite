<?php
	include('../db_con.php');
	$get_id = $_GET['article_id'];

	$sql = "select * from article where article_id = $get_id";
	$query = $db->query($sql);
	$row=$query->fetch_array();
	$file=$row['article_file1'];

		unlink("images/$file");
		$delete =mysqli_query($db,"delete from article where article_id = $get_id");
		header("Location: " .$_SERVER['HTTP_REFERER']);

	
	
?>