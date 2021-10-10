<?php
	session_start();
	if( !isset($_SESSION['Login'])){
		header("Location: login.php");
	}
	echo $_SESSION['nama'];
 ?>

 <a href="logout.php">Logout</a>


