<!DOCTYPE html>
<html lang="pl" dir="ltr" data-kukanqto="kasztan">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Beaverbook</title>
	<meta name="description" content="Beaverbook, Super sieć społecznościowa zainspirowana przez konkurs bóbr">
	<meta property="og:url" content="<?= $site["config"]["siteurl"] ?>">
	<meta property="og:image" content="<?= $site["config"]["siteurl"] . "assets/h.png" ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Beaverbook">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:creator" content="@ProgramistaZpolski">
	<meta name="twitter:url" content="<?= $site["config"]["siteurl"] ?>">
	<meta name="twitter:title" content="Beaverbook">
	<meta name="twitter:description" content="Beaverbook, Super sieć społecznościowa zainspirowana przez konkurs bóbr">
	<meta name="twitter:image" content="<?= $site["config"]["siteurl"] . "assets/h.png" ?>">
	<meta name="theme-color" content="#fafafa">
	<meta name="author" content="Piotr Badełek">
	<link rel="apple-touch-icon" href="/assets/h.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" type="image/x-icon" href="/favicon.ico">
	<link rel="icon" type="image/png" href="/assets/h.png">
	<meta name="application-name" content="Beaverbook">
	<link rel="manifest" href="./assets/site.webmanifest">
	<link rel="stylesheet" href="./assets/style.css">
</head>

<body>
	<!--[if IE]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	<h1 class="d3">Beaverbook</h1>
	<h2>Witamy.</h2>
	<h3>Logowanie</h3>
	<form action="./index.php" method="get">
		<div class="inputs">
			<label for="username">Nazwa Użytkownika</label>
			<input type="text" name="username" id="username">
		</div><br>
		<button class="btn btn-normal" type="submit">Kontynuuj.</button>
	</form><br>
	<h4>Rejestracja</h4>
	<form action="./index.php" method="get">
		<div class="inputs">
			<label for="username2">Nazwa Użytkownika</label>
			<input type="text" name="username2" id="username2">
		</div><br>
		<button class="btn btn-normal" type="submit">Kontynuuj.</button>
	</form>
</body>

</html>