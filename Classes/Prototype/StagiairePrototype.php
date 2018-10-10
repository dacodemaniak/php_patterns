<?php
/**
* @name StagiairePrototype Classe définissant un stagiaire
* @version 1.0.0
*/
require_once(__DIR__ . "/ParticipantPrototype.php");

class StagiairePrototype extends ParticipantPrototype {
	protected $type = "Stagiaire";
	
	public function __clone(){}
}