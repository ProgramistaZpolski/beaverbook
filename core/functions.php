<?php

class Utils
{
	public static function denyAccess(String $moreInfo = "")
	{
		header('HTTP/1.0 403 Forbidden');
		die("<p style='font-size: 1.25rem; font-family: Ubuntu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Helvetica, Cantarell, Oxygen, Arial, Tahoma, Geneva, Verdana, 'Noto Sans', sans-serif;'>403 Access Denied. " . $moreInfo . "</p>");
	}

	public static function dump($data) {
		echo "<pre style='font-size: 1.25rem;'>";
		var_dump($data);
		echo "</pre>";
		die();
	}
}
