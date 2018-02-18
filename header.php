<h1>Add Your Book Marks</h1>
<div class="nav">
    <ul>
		<li><a href="index.php">ADD URLS</a></li>
		<li><a href="search.php">SearchURLS</a></li>
        
       
        <?php if(isset($_SESSION['email'])) {    ?>
		<li><a href="logout.php">Logout</a></li>
        <?php  } ?>
    </ul> 
</div>