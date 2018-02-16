<?php
	include "connect.php";
	session_start();
	if(!isset($_SESSION['email'])) 
		header('location:login.php');
	$user_id = $_SESSION['user_id'];
	if(isset($_POST['submit'])) {
		$category=$_GET['category'];
		$urlid=$_GET['urlid'];
		$user_id = $_SESSION['user_id'];
		$qry2 = "select * from url where `user_id`='$user_id' and `url_id`='$urlid' and `category`='$category';";
		mysqli_query($conn,$qry2);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="home.css">
	</head>
	<body>
		<div class="header">
			<?php include "header.php"?>
		</div>
		<div class="content">
			<div class="disp decription">
				<h3>Search Added URLS</h3>
				<form method="post" id="frm">
					<input type="text" name="urlid" id="urlid">
						<select name="category" id="categer">
							<option value="Studies">Studies</option>
							<option value="Social Networking">Social Networking</option>
							<option value="Stories">Stories</option>
							<option value="Food">Food</option>
							<option value="Sports">Sports</option>
							<option value="politics">Politics</option>
							<option value="others">Others</option>
						</select>
					<input type="button" value="Submit" name="submit" onclick="showurls();">
				</form>
				<div id="comments" class="comments">
</div>
				<script>
				document.getElementById("categer").selectedIndex = -1;
			function showurls() {
				document.getElementById("comments").innerHTML=" ";

				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("comments").innerHTML += this.responseText;
					}
				};
				var cat=document.getElementById("categer").value;
				var urlid=document.getElementById("urlid").value;
				document.getElementById("frm").reset();
				document.getElementById("categer").selectedIndex = -1;
				xhttp.open("GET","showurls.php?rid=<?php echo $user_id;?>&cat="+cat+"&urlid="+urlid, true);
				xhttp.send();
			}
		</script>
		</div>
		</div>
	</body>
</html>