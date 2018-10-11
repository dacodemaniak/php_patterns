<?php
/**
* @name VehiculeBuilder Interface de définition de la construction d'un véhicule
* @package Builder
* @version 1.0.0
*/
namespace Builder;

interface VehiculeBuilder {
	public function createVehicule();
	
	public function addEngine();
	
	public function addWheels();
	
	public function getVehicule();
}