<?php
/**
* @name PlainWriter Service d'écriture d'un texte plein
* @version 1.0.0
*/
namespace Factory\Writer;

use Factory\Writer\Writer;

class PlainWriter implements Writer {
	/**
	 * 
	 * @var string
	 */
	private $text;
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see Writer::afficher()
	 */
	public function afficher(): string {
		return $this->text;
	}
	
	/**
	 * Définit ou retourne le texte à afficher
	 * @param string $text
	 * @return string|PlainWriter
	 */
	public function text(string $text=null) {
		if (is_null($text)) {
			return $this->text;
		}
		
		$this->text = $text;
		return $this;
	}
}