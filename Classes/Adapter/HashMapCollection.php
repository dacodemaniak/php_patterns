<?php
/**
* @name HashMapCollection Collection de données dans un tableau associatif
* @package Adapter
* @version 1.0.0
*/
namespace Adapter;

require_once(__DIR__ . "/Item.php");
require_once(__DIR__ . "/Parcours.php");

use Adapter\Item;

class HashMapCollection implements Item {
	private $collection = [];
	
	private $key;
	
	private $value;
	
	public function __construct() {
		$this->collection["first"] = "first";
		$this->collection["second"] = "second";
		$this->collection["third"] = "third";
	}
	
	public function setKey(string $key) {
		$this->key = $key;
		return $this;
	}
	
	public function setValue(string $value) {
		$this->value = $value;
	}
	
	public function add() {
		$this->collection[$this->key] = $this->value;
		return $this;
	}
	
	public function getHashMap(){
		return $this->collection;
	}
	
}