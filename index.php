<?php
$page = $_GET['page'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hjemmeside</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" title="styleen" href="style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
	</script>
	<script src="./script.js">
	</script>

</head>

<body>

	<header id="header">
		<img id="header_bilde" src="sbioheader.jpg" alt="Logo" title="Logo">

	<nav>
		<ul id="meny">
			<li> <a href="index.php?page=hjem"> Hjem </a> </li>
			
			<li> <a> Lag </a>
			<ul>
				<li> <a href="index.php?page=herrelag"> Herre </a> </li>
				<li> <a href="index.php?page=damelag"> Dame </a> </li>						
			</ul>
			</li>
			
			<li> <a> Profiler </a>
			<ul>
				<li> <a href="index.php?page=profiler"> Herre </a> </li>
				<li> <a href="index.php?page="> Dame </a> </li>						
			</ul>
			</li>
			
			<li> <a href="index.php?page=media"> Media </a></li>
			
			<li> <a href="index.php?page=nyheter"> Nyheter </a></li>
				
			<li> <a href="index.php?page=kontakt"> Kontakt </a> </li>		
		
	
	</nav>

</header>

	<?php
	switch($page){

		case "herrelag";
		include('herrelag.html');
		break;
		
		case "damelag";
		include('damelag.html');
		break;
		
		case "nyheter";
		include('nyheter.html');
		break;

		case "profiler":
		include('profiler.html');
		break;

		case "kontakt":
		include('kontaktskjema.html');
		break;
		
		case "media";
		include('media.html');
		break;

		case "henvendelse";
		include('web_hen.html');
		break;

		default: include('hjem.html');
		break;
	}
	?>

<footer>
	<p> Tasmia Faruque - Magnus Tønsager - Mimi Wikant - Peter Wilhelmsen </p>
	<p> Gruppe 41 </p>
</footer>

</body>
</html>
