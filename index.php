<?php

$database = require_once "./core/bootstrap.php";

if (!$_GET["mvc_view"] && $_GET["username"]) {
	header("Location: index.php?mvc_view=logged&mvc_controller=logged&mvc_model=mysql&username=" . $_GET["username"]);
	die();
}

if (!$_GET["mvc_view"] && $_GET["username2"]) {
	header("Location: index.php?mvc_view=register&mvc_controller=register&mvc_model=mysql&username=" . $_GET["username2"]);
	die();
}

if (!$_GET["mvc_view"] && $_GET["username3"]) {
	header("Location: index.php?mvc_view=comment&mvc_controller=comment&mvc_model=mysql&tekst=" . $_GET["tekst"] . "&username=" . $_GET["username3"]);
	die();
}

if (!$_GET["mvc_view"]) {
	header("Location: index.php?mvc_view=onboarding&mvc_controller=onboarding&mvc_model=nodb");
	die();
}

if (
	$_GET["mvc_view"] == "onboarding" ||
	$_GET["mvc_view"] == "logged" ||
	$_GET["mvc_view"] == "register" ||
	$_GET["mvc_view"] == "comment"
) {
	require_once "./controller/" . $_GET["mvc_view"] . ".php";
} else {
	die("404 View not found.");
}