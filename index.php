<?php
$page = $_GET['page'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Hjemmeside</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" title="styleen" href="">

	</head>
	<body>
		<header>
			<img src="" alt"Logo">
			<h1>
				Hjemmeside
			</h1>
		</header>
		<nav>
			<div class="nav">Underside</div>
			<div class="nav">Underside</div>
			<div class="nav">Underside</div>
			<div class="nav">Underside</div>
		</nav>

		<?php
		switch($page){
			
		case "":
			include('underside1.html';
		break;
		
		case "":
			include('underside2.html';
		break;
		
		case "":
			include('underside3.html');
		break;
		
		default: include('hjem.html');
		break;
		}
	
		?>

		<footer>
			<p>Laget av gruppe 41</p>
		</footer>
	</body>
</html>
