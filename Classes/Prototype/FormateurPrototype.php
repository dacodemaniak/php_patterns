<?php
/**
* @name StagiairePrototype Classe définissant un stagiaire
* @version 1.0.0
*/
require_once(__DIR__ . "/ParticipantPrototype.php");

class FormateurPrototype extends ParticipantPrototype {
	/**
	 * Surcharge l'attribut protégé
	 * @var string
	 */
	protected $type = "Formateur";
	
	public function __clone(){}
}