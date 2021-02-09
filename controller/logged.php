<?php

include_once "core/functions.php";

$FromController = true;

if (!$_GET["username"]) {
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

$posts = $site['database']->selectAll("posts");

require_once "views/logged.view.php";