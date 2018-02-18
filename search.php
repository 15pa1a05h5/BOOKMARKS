<?php
	include "connect.php";
	session_start();
	if(!isset($_SESSION['email'])) 
		header('location:login.php');
	$user_id = $_SESSION['user_id'];
	if(isset($_POST['submit'])) {
		$category=$_GET['category'];
		$urlid=$_GET['urlid'];
		$urls=$_GET['urls'];
		$user_id = $_SESSION['user_id'];
		$qry1 = "SELECT * FROM `url` where (`url` like '%$urls%')";
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
				<h3>Search Added URLS</h3><br>
				<form method="post" id="frm">
					SearchByurl:<input type="text" name="urls" id="urls">
					<input type="button" value="Submit" name="submit" onclick="showurls();">
				</form>
				<div id="comments" class="comments">
					<?php $qry1 = "SELECT * FROM `url` where `user_id`='$user_id';";
					$sql1 = mysqli_query($conn,$qry1);
					if(mysqli_num_rows($sql1)>0) {
						echo "<table class='pop'>";
						echo "<tr>";
						echo "<th>URL</th>";
						echo "<th>Category</th>";
						echo "<th>URL_ID</th>";
						echo "<th>add_time</th>";
						echo "</tr>";
						while($row1=mysqli_fetch_assoc($sql1)) {
							$uid = $row1['user_id'];
							$qry2 = "SELECT * FROM `tbl_user` where `user_id` = '$uid'";
							$sql2 = mysqli_query($conn,$qry2);
							$row2=mysqli_fetch_assoc($sql2);
							echo "<tr>";
							echo "<td>";
							echo $row1['url'];
							echo "</td>";
							echo "<td>";
							echo $row1['category'];
							echo "</td>";
							echo "<td>";
							echo $row1['url_id'];
							echo "</td>";
							echo "<td>";
							echo $row1['add_time'];
							echo "</td>";
							echo "</tr>";
						}
						echo "</table>";
					}else echo "Nocomments"; ?>
				</div>
				<script>
				
			function showurls() {
				document.getElementById("comments").innerHTML=" ";

				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("comments").innerHTML += this.responseText;
					}
				};
				var urls=document.getElementById("urls").value;
				document.getElementById("frm").reset();
				xhttp.open("GET","showurls.php?rid=<?php echo $user_id;?>&urls="+urls, true);
				xhttp.send();
			}
		</script>
		</div>
		</div>
	</body>
</html>