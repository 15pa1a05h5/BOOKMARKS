<?php
include "connect.php";
session_start();
$url = $_GET['comment'];
$category=$_GET['cat'];
$urlid=$_GET['urlid'];
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
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
?>