<?php
/**
* @name VehiculeDirector Générateur de véhicules
* @package Builder
* @version 1.0.0
*/
namespace Builder;

use Builder\VehiculeBuilder;

class VehiculeDirector {
	public function build(VehiculeBuilder $vehiculeBuilder) {
		
		// Crée un véhicule
		$mycar = $vehiculeBuilder->createVehicule();
		
		// Ajoute un moteur
		$vehiculeBuilder->addEngine();
		
		// Ajoute les roues
		$vehiculeBuilder->addWheels();
		
		if ($mycar instanceof \Builder\Auto\Car) {
			// Complete stuff for this fucking car
		}
		
		// Retourne le véhicule créé
		return $vehiculeBuilder->getVehicule();
	}
}