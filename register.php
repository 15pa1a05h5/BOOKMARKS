<?php 
include "connect.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
		$repass=$_POST['repass'];
		if($pass!=$repass)
			$warning= "passwords not matched";
		else{
		$qry1="select * from tbl_user where `user_name`='$name' or `user_email`='$email'";
		$sql=mysqli_query($conn,$qry1);
		if(mysqli_num_rows($sql)>0) {
			$warning = "You have already registered";
		}
		else{
        $qry = "INSERT INTO `tbl_user` ( `user_name`, `user_email`, `password`) VALUES ('$name', '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login.php');
		}
		}
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>ADD YOUR BOOKMARKS</title>
            <link rel="stylesheet" href="home.css">
    </head>   
    <body>
        <div class="header">
            <?php include "header.php"?>   
        </div>
        <div class="content">
            <div class="disp">
                <h2>Register</h2>
				<h4> <?php if(isset($warning)) echo $warning; ?></h4>
                <form class="form" method="post" action="">
                Name<input type="text" name="name">
                Email<input type="text" id="email" name="email">
                Password<input type="password" name="pass">
                Retype Password <input type="text" name="repass">
                <input type="submit" name="sub" value="Click to Submit">
            </form>
			<b>If you have Registered <a href="login.php">Login</a></b>
      </body>  
</html>
<script>
	var x=document.getElementById("email").value;
	console.log x;
</script>