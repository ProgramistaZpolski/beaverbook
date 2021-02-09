<?php

class Utils
{
	public static function denyAccess(String $moreInfo = "")
	{
		header('HTTP/1.0 403 Forbidden');
		die("403 Access Denied. " . $moreInfo);
	}

	public static function dump($data) {
		echo "<pre style='font-size: 1.25rem;'>";
		var_dump($data);
		echo "</pre>";
		die();
	}
}
