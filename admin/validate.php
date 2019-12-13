<?php 
session_start();
include('../db_con.php');

    if (isset($_POST['submit'])){

      $username = addslashes(strip_tags($_POST['username']));
      $password = addslashes(strip_tags(md5($_POST['password'])));
      $fetch=mysqli_query($db, "select * from admin  where username ='$username' and password= '$password' ");
      $check = mysqli_num_rows($fetch);

        if($check > 0){
            
            $_SESSION['username']=$username;
            header("Location: dashboard");
          
        }
         else{
            
            echo "<script>alert('Incorrect Username or Password');window.location.href='login'</script>";          
        }
       
    }
?>