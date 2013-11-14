<?php
$page = $_GET['page'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hjemmeside</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" title="styleen" href="style.css">

</head>

<body>

	<header id="header">
		<img id="header_bilde" src="baflogo.jpg" alt="Logo" title="Logo">
		<h1>
			BI Athletics Fotball
		</h1>

	<nav>
		<ul id="meny">
			<li> <a href="index.php"> Hjem </a> </li>
			<li> <a href="#"> Lag </a>
				<ul>
					<li> <a href="index.php?page=1"> Herre </a> </li>
					<li> <a href="#"> Dame </a> </li>						
				</ul>
			</li>
			<li> <a href="#"> Profiler </a> </li>
			<li> <a href="#"> Media </a>
				<ul>
					<li> <a href="#"> Bilder </a> </li>
					<li> <a href="#"> Video </a> </li>				
				</ul>
			</li>	
			<li> <a href="#"> Kontakt </a> </li>		
		</ul>
	</nav>

</header>

	<?php
	switch($page){

		case "1":
		include('underside1.html');
		break;

		case "2":
		include('underside2.html');
		break;

		case "3":
		include('underside3.html');
		break;

		default: include('hjem.html');
		break;
	}
	?>

<footer>
	<p> Laget av gruppe 41 <p>
</footer>

</body>
</html>
