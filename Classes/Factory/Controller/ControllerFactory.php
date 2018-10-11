<?php
/**
* @name ControllerFactory Usine à contrôleur
* @package Factory\Controller
* @version 1.0.0
*/
namespace Factory\Controller;

use Http\Request\Request;
use Annotations\ReflectionAnnotatedClass;

class ControllerFactory {
	/**
	 * Instance de réflexion
	 * @var \ReflectionClass
	 */
	private $reflection;
	
	private $instance;
	
	public function create(string $type) {
		// Défini le nom du contrôleur à instancier
		$controllerName = "Controller\\" . ucfirst($type) . "Controller";
		
		// Inspecte la classe à instancier
		$this->reflection = new \ReflectionClass($controllerName);
		
		$this->instance = $this->reflection->newInstance([]);
		
		// Allons voir si je dois faire des choses à partir de l'instance
		$dependencies = $this->getDependencies();
		
		if (count($dependencies)) {
			foreach($dependencies as $privateAttribute => $className) {
				$class = trim($className);
				require_once(__DIR__ . "/../../" . str_replace("\\", "/", $class) . ".php");
				$dependency = $class::get();
				$this->instance->{$privateAttribute} = $dependency;
			}
		}
		return $this->instance;
	}
	
	private function getDependencies(): array {
		$staticInjectables = [];
		
		// On commence par Addendum
		$reflection = new ReflectionAnnotatedClass($this->instance);
		
		if($reflection->hasAnnotation("StaticInjector")){
			// Traite à partir des annotations
			$decorators = $reflection->getAllAnnotations("StaticInjector");
			
		} else {
			// Sinon, inspection directe via Reflection
			// @todo Vérifier le parsing du commentaire
			$comments = $this->reflection->getDocComment();
			if($comments){
				#begin_debug
				#echo "Charge les décorateurs à partir des annotations<br>";
				#var_dump($comments);
				#end_debug
				$commentLines = explode("\n", $comments);
				foreach ($commentLines as $commentLine){
					if(count($parts = explode("@StaticInjector", $commentLine)) > 1){
						//var_dump($parts);
						$injectable = str_replace(["(", ")"], "", $parts[1]);
						
						if (strlen($injectable)) {
							$parts = explode("\\", $injectable);
							$privateAttribute = strtolower(array_pop($parts));
							$staticInjectables[$privateAttribute] = str_replace("\r", "", $injectable);
						}
					}
				}
			} else {
				// Commentaires non disponibles, on vérifie la route
				return [];
			}
		}
		return $staticInjectables;
	}
}