<?php
/**
* @name WriterFactory Usine à Writer
* @version 1.0.0
*/
namespace Factory\Writer;

abstract class WriterFactory {
	/**
	 * Retourne une instance de PlainWriter
	 * @param string $text
	 * @return Writer
	 */
	protected final static function createPlainWriter(array $args): Writer {
		require_once(__DIR__ . "/PlainWriter.php");
		$instance = new PlainWriter();
		$instance->text($args[0]);
		
		return $instance;
	}
	
	/**
	 * Instancie un RichWriter
	 * @param string $text
	 * @param string $tag
	 * @return Writer
	 */
	protected final static function createRichWriter(array $args): Writer {
		require_once(__DIR__ . "/RichWriter.php");
		
		$instance = new RichWriter();
		
		$instance->text($args[0]);
		
		if(count($args) === 2) $instance->tag($args[1]);
		
		return $instance;
	}
}