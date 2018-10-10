<?php
/**
* @name Factory Extension de la classe WriterFactory
* @version 1.0.0
*/
require_once(__DIR__ . "/WriterFactory.php");

class Factory extends WriterFactory {
	public static function create(string $type, array $args): Writer {
		/**
		 * Reconstruit le nom du fichier de classe à partir du type
		 * @use ./TypeWriter.php
		 */
		require_once(__DIR__ . "/" . ucfirst($type) . "Writer.php");
		$methodName = "create" . ucfirst($type) . "Writer";
		
		
		$instance = self::$methodName($args);
		
		return $instance;
	}
}