<?php

include_once "core/functions.php";

if (!$_GET["username"]) {
	Utils::denyAccess();
}

$txt = $site['database']->sanitize($_GET["username"]);

$site['database']->fetch("INSERT INTO `users` (`id`, `username`, `accepted`) VALUES (NULL, ' . $txt . ', '0')"); 

die("Gotowe, czekaj na weryfikacje!");