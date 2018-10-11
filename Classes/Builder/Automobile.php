<?php
/**
* @name Automobile Création d'une automobile 4 roues jantes alu et un moteur
* @package Builder
* @version 1.0.0
*/
namespace Builder;

use Builder\VehiculeBuilder;
use Builder\Auto\Car;

class Automobile implements VehiculeBuilder {
	private $automobile;
	
	public function addEngine() {
		$this->automobile->setPart("v8", new \Builder\Parts\Engine("v8"));
	}
	
	public function addWheels() {
		$this->automobile->setPart("avg", new \Builder\Parts\Wheel());
		$this->automobile->setPart("avd", new \Builder\Parts\Wheel());
		$this->automobile->setPart("arg", new \Builder\Parts\Wheel());
		$this->automobile->setPart("ard", new \Builder\Parts\Wheel());
	}
	
	public function createVehicule() {
		$this->automobile = new Car();
		return $this->automobile();
	}
	
	public function getVehicule(){
		return $this->automobile;
	}
}