<?php
	
	include('../db_con.php');
		if(isset($_POST['add_article'])){

			$fileinfo=PATHINFO($_FILES["image"]["name"]);
			$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
			move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $newFilename);
			$location=$newFilename;

			$article_title = addslashes(strip_tags($_POST['article_title']));
			$article_token = addslashes(strip_tags(md5($_POST['article_title'])));
			$article_writer = addslashes(strip_tags($_POST['article_writer']));	
			$article_department = addslashes(strip_tags($_POST['article_department']));	
			$article_category = addslashes(strip_tags($_POST['article_category']));
			$article_paragraph1 = addslashes(strip_tags($_POST['article_paragraph1']));	
			$article_paragraph2 = addslashes(strip_tags($_POST['article_paragraph2']));	
			$article_paragraph3 = addslashes(strip_tags($_POST['article_paragraph3']));		
			$publish_date = date('l jS \of F Y h:i:s A');

			$adddata = "insert into article (article_id, article_token, article_title, article_writer, article_department, article_category, article_file1, article_file2, article_paragraph1, article_paragraph2, article_paragraph3, publish_date)
			            			   VALUE('NULL', '$article_token','$article_title','$article_writer', '$article_department', '$article_category', '$location','NULL','$article_paragraph1','$article_paragraph2','$article_paragraph3', '$publish_date')";

			mysqli_query($db,$adddata);
			header("Location: dashboard");
		}
?>


