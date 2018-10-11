<?php
/**
* @name IntegerCollection Collection de nombre entiers
* @package Adapter
* @version 1.0.0
*/
namespace Adapter;

require_once(__DIR__ . "/Parcours.php");

use Adapter\Parcours;

class IntegerCollection implements Parcours {
	private $integers = [];
	
	private $indice = 0;
	
	public function __construct() {
		for($i = 1; $i < 11; $i++) {
			$this->integers[] = $i;
		}
	}
	
	public function reset() {
		$this->indice = 0;
	}
	
	public function last() {
		$this->indice = count($this->integers) - 1;
	}
	
	public function next(){
		$this->indice++;
	}
	
	public function get(){
		return $this->integers[$this->indice];
	}
}