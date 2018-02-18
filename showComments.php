<?php
include "connect.php";
session_start();
$url = $_GET['comment'];
$category=$_GET['cat'];
$urlid=$_GET['urlid'];
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$qry1="select * from url where `url`='$url' and `user_id`='$user_id'";
		$sql=mysqli_query($conn,$qry1);
		if(mysqli_num_rows($sql)>0) {
			$warning = "Already this url is present in your account";
			echo $warning;
			$row1=mysqli_fetch_assoc($sql);
			echo "<table id='pop'>";
			echo "<tr>";
			echo "<th>URL</th>";
			echo "<th>Category</th>";
			echo "<th>add_time</th>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo $row1['url'];
			echo "</td>";
			echo "<td>";
			echo $row1['category'];
			echo "</td>";
			echo "<td>";
			echo $row1['add_time'];
			echo "</td>";
			echo "</tr>";
			echo "</table>";
		}
		else{
if(!($category)){
	echo "Please enter any category";
}
else{
	$qry = "INSERT INTO `url` ( `user_id`,`username`,`url`,`url_id`,`category` ) VALUES ($user_id,'$user_name','$url','$urlid','$category');";
	mysqli_query($conn,$qry) or die("error running query: ".$qry);
}
		
$qry2 = "SELECT * FROM `tbl_user` where `user_id` = '$user_id'";
$sql2 = mysqli_query($conn,$qry2) or die("error running query: ".$qry2);
$row2=mysqli_fetch_assoc($sql2);
echo "<div class='comment'>";
echo "Added your URL Sucessfully";
echo "</div>";
		}
?>