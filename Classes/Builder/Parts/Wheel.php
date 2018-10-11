<?php
/**
* @name Wheel Définition d'une roue constitutive d'un véhicule
* @package Builder\Parts
* @version 1.0.0
*/
namespace Builder\Parts;

require_once(__DIR__ . "/Part.php");

use Builder\Parts\Part;

class Wheel implements Part {
	/**
	 * Définit si la roue est avec jante alu ou pas
	 * @var string
	 */
	private $hasJante = false;
	
	public function __construct(){}
	
	public function hasJante(boolean $hasJante) {
		$this->hasJante = $hasJante;
		return $this;
	}
}