<?php
/**
* @name IndexController Contrôleur de la page d'accueil
* @package Controller
* @version 1.0.0
*/
namespace Controller;

use Http\Request\Request;

/**
 @StaticInjector Http\Request\Request
 */

class IndexController implements \Countable {
	/**
	 * Instance de Http\Request\Request
	 * @var Http\Request\Request
	 */
	private $request;
	
	public function __construct(){}
	
	public function __set($attributeName, $value) {
		$this->{$attributeName} = $value;
	}
	
	/**
	 * Retourne la valeur d'un attribut de l'objet Request
	 * @param string $attributeName
	 * @return string | null | boolean
	 */
	public function __get(string $attributeName) {
		return $this->request->getParam($attributeName);
	}
	
	/**
	 * 
	 * {@inheritDoc}
	 * @see Countable::count()
	 */
	public function count() {
		return $this->request->paramsCount();
	}
}