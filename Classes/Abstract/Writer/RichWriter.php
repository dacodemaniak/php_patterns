<?php
/**
* @name RichWriter Service d'écriture d'un texte riche
* @version 1.0.0
*/
require_once(__DIR__  . "/Writer.php");

class RichWriter implements Writer {
	/**
	 * 
	 * @var string
	 */
	private $text;
	
	/**
	 * Tag HTML à utiliser pour retourner le texte
	 * @var string
	 */
	private $htmlTag = "strong";
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see Writer::afficher()
	 */
	public function afficher(): string {
		return "<" . $this->htmlTag . ">" . $this->text . "</" . $this->htmlTag . ">";
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
	
	/**
	 * Définit ou retourne le tag HTML à utiliser
	 * @param string $tag
	 * @return string|RichWriter
	 */
	public function tag(string $tag=null) {
		if (is_null($tag)) {
			return $this->tag;
		}
		$this->tag = $tag;
		return $this;
	}
}