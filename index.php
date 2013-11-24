<?php
if(isset($_GET['page']) )
	$page = $_GET['page'];
else
	$page = "hjem"
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Hjemmeside</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" title="style" href="./style.css">
		<link rel="alternate stylesheet" type="text/css" title="altstyle" href="./uni.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
		</script>
		<script src="./script.js">
		</script>

	</head>

	<body>
		<header id="header">
			<img id="header_bilde" src="./bilder/sbioheader.jpg" alt="Logo" title="Logo">
			<nav>
				<ul id="meny">
					<li> <a href="index.php?page=hjem"> Hjem </a> </li>

					<li> <a href="index.php?page=lagstart"> Lag </a>
					<ul>
						<li> <a href="index.php?page=herrelag"> Herre </a> </li>
						<li> <a href="index.php?page=damelag"> Dame </a> </li>
					</ul>
					</li>

					<li> <a href="index.php?page=profilerstart"> Profiler </a>
					<ul>
						<li> <a href="index.php?page=profiler"> Herre </a> </li>
						<li> <a href="index.php?page=profilerdamelag"> Dame </a> </li>
					</ul>
					</li>

					<li> <a href="index.php?page=media"> Bilder </a></li>

					<li> <a href="index.php?page=nyheter"> Nyheter </a></li>

					<li> <a href="index.php?page=kontakt"> Kontakt </a> </li>
				</ul>
			</nav>
		</header>

		<section id="ramme">
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

				case "profilerstart":
				include('profilstart.html');
				break;

				case "lagstart":
				include('lagstart.html');
				break;

				case "profilerdamelag":
				include('profilerdame.html');
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
		</section>

		<footer>
			<p> Tasmia Faruque - Magnus Tønsager - Mimi Wikant - Peter Wilhelmsen </p>
			<p> Gruppe 41 </p>
		</footer>
	</body>
</html>
