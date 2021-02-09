<?php

include_once "core/functions.php";

if (!$_GET["tekst"] || !$_GET["username"]) {
	Utils::denyAccess();
}

$users = $site['database']->selectAll("users");

$found = false;

foreach ($users as $key => $value) {
	if ($value->username == $_GET["username"] && $value->accepted == "1") {
		$found = true;
	}
}

if ($found == false) {
	Utils::denyAccess("Nie znaleziono uzytkownika, lub użytkownik nie jest jeszcze zweryfikowany.");
}

$txt = $site['database']->sanitize($_GET["tekst"]);

$site['database']->fetch("INSERT INTO `posts` (`id`, `author`, `content`) VALUES (NULL, '" . $_GET["username"] . "', '" . $_GET["tekst"] . "') "); 

header("Location: index.php?mvc_view=logged&mvc_controller=logged&mvc_model=mysql&username=" . $_GET["username"]);
die();