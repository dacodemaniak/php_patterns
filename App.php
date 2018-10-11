<?php
/**
* @name App.php Classe de chargement de l'application
* @package App
* @version 1.0.0
*/
namespace App;

class App {
	public static function register() {
		spl_autoload_register([__CLASS__, "autoload"]);
	}
	
	public static function autoload(string $class) {
		$parts = explode("\\", $class);
		
		$fullPathName = __DIR__ . "/Classes/" . join("/", $parts);
		if (!file_exists($fullPathName . ".php")) {
			$fullPathName .= ".class.php";
		} else {
			$fullPathName .= ".php";
		}
		//echo "Charge " . $fullPathName . "<br>\n";
		if (!require_once($fullPathName)) {
			throw new \FileNotFoundException();
		}
	}
}