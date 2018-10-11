<?php
/**
* @name StagiairePrototype Classe définissant un stagiaire
* @version 1.0.0
*/
namespace Prototype;

use Prototype\ParticipantPrototype;

class StagiairePrototype extends ParticipantPrototype {
	protected $type = "Stagiaire";
	
	public function __clone(){}
}