<?php
/**
* @name Request Service de gestion d'une requête HTTP
* @package Http\Request
* @version 1.0.0
*/
namespace Http\Request;

use Patterns\Singleton\Singleton;

class Request implements Singleton {
	/**
	 * Instance de l'objet Request proprement dite
	 * @var Request
	 */
	private static $instance;
	
	/**
	 * Paramètres GET ou POST de la requête
	 * @var array
	 */
	private $params = [];
	
	/**
	 * Instancie l'objet Request proprement dit
	 * private pour éviter toute instanciation malenctontreuse
	 */
	private function __construct(){
		$this->setParams();
	}
	
	/**
	 * Instancie ou récupère l'instance de l'objet
	 * @return Request
	 */
	public static function getRequest(): Request {
		if (is_null(self::$instance)) {
			self::$instance = new Request();
		}
		return self::$instance;
	}
	
	/**
	 * Implémentation de la méthode get()
	 * @see Patterns\Singleton\Singleton
	 */
	public static function get() {
		return self::getRequest();
	}
	
	public function addParam($key, $value) {
		$this->params[$key] = $value;
	}
	
	public function getParam($key, $default=null) {
		if (array_key_exists($key, $this->params)) {
			return $this->params[$key];
		} else {
			if (!is_null($default)) {
				$this->params[$key] = $default;
				return $this->getParams($key);
			}
		}
	}
	
	public function paramsCount(): int {
		return count($this->params);
	}
	/**
	 * Hydrate la collection des paramètres de la requête HTTP
	 */
	private function setParams() {
		if (count($_GET)) {
			foreach($_GET as $key => $value) {
				$this->params[$key] = $value;
			}
		}
		
		if (count($_POST)) {
			foreach($_POST as $key => $value) {
				$this->params[$key] = $value;
			}
		}
		
		// It was great to get php://input too
	}
}