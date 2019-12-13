<?php
	include('../db_con.php');
	$article_id = addslashes(strip_tags($_POST['article_id']));
	$article_title = addslashes(strip_tags($_POST['article_title']));
	$article_token = addslashes(strip_tags(md5($_POST['article_title'])));
	$article_writer = addslashes(strip_tags($_POST['article_writer']));	
	$article_department = addslashes(strip_tags($_POST['article_department']));	
	$article_category = addslashes(strip_tags($_POST['article_category']));
	$article_paragraph1 = addslashes(strip_tags($_POST['article_paragraph1']));	
	$article_paragraph2 = addslashes(strip_tags($_POST['article_paragraph2']));	
	$article_paragraph3 = addslashes(strip_tags($_POST['article_paragraph3']));		
	$update_update = date('l jS \of F Y h:i:s A');

	$update2 = mysqli_query($db, "UPDATE article SET article_title ='$article_title', article_token ='$article_token', article_writer = '$article_writer', article_department ='$article_department', article_category = '$article_category', article_paragraph1 = '$article_paragraph1', article_paragraph2 = '$article_paragraph2',article_paragraph3 = '$article_paragraph3', publish_update ='$publish_update'  WHERE article_id ='$article_id'") or die(mysqli_error());
	if(mysqli_affected_rows($db)>0){
	header("Location: dashboard"); 
	}
?>