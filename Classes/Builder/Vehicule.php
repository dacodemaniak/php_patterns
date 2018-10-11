<?php
/**
* @name Vehicule Abstraction de classe pour la création d'un véhicule
* @version 1.0.0
*/
namespace Builder;

use Builder\Parts\Part;

abstract class Vehicule {
	/**
	 * Eléments qui constituent le véhicule
	 * @var array
	 */
	private $parts = [];
	
	/**
	 * Ajoute un élément au véhicule concret à construire
	 * @param string $key
	 * @param Parts $object
	 */
	public function setPart(string $key, Part $object){
		if (!array_key_exists($key, $this->parts))
			$this->parts[$key] = $object;
	}
}