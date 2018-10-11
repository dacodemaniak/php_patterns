<?php
/**
* @name StagiairePrototype Classe définissant un stagiaire
* @version 1.0.0
*/
namespace Prototype;

use Prototype\ParticipantPrototype;

class FormateurPrototype extends ParticipantPrototype {
	/**
	 * Surcharge l'attribut protégé
	 * @var string
	 */
	protected $type = "Formateur";
	
	public function __clone(){}
}