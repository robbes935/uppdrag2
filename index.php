<!DOCTYPE html>
	<html>
		<head>
			<link href="CSS/style.css" rel="stylesheet"/>
			<!--<script src="jss/java.js"></script>-->
			<meta charset="utf-8">
			<title>Uppdrag 2</title>
		</head>
		<body>
			<nav id="meny">
				<ul>
					<li><a href="index.php?page=hem">Hem</a></li>
					<li><a href="index.php?page=klass">Klasslista</a></li>
					<li><a href="index.php?page=tran">Träning</a></li>
					<li><a href="index.php?page=om">Om oss</a></li>
					<li><a href="index.php?page=roll">Roller</a></li>
				</ul>
			</nav>
			<header> 
			</header>
<?php
	
	if(isset($_GET['page'])) {
		$page = $_GET['page'];

	if($page=="klass")
		$file = "klass.html";
	else if($page=="tran")
		$file = "tran.html";
	else if($page=="om")
		$file = "om.html";
	else if($page=="roll")
		$file = "roll.html";
	else
		$file = "hem.html"; 

	include $file; 	
}
?>
</body>