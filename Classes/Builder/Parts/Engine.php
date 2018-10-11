<?php
/**
* @name Engine Définition du moteur des véhicules
* @package \Builder\Parts
* @version 1.0.0
*/
namespace Builder\Parts;

require_once(__DIR__ . "/Part.php");

use Builder\Parts\Part;

class Engine implements Part {
	/**
	 * Type de moteur
	 * @var string
	 */
	private $type;
	
	
	public function __construct(string $type) {
		$this->type = $type;
	}
	
	public function getType(): string {
		return $this->type;
	}
}