<?php
namespace Adapter;

require_once(__DIR__ . "/Parcours.php");
require_once(__DIR__ . "/HashMapCollection.php");

use Adapter\Parcours;

class HashMapAdapter implements Parcours {
	protected $hashMap;
	
	private $indice = 0;
	private $key;
	
	public function __construct(HashMapCollection $hashMap) {
		$this->hashMap = $hashMap->getHashMap();
	}
	
	public function reset() {
		$this->indice = 0;
		$keys = array_keys($this->hashMap);
		$this->key = $keys[$this->indice];
		
	}
	
	public function last(){
		$this->indice = count($this->hashMap) - 1;
		$keys = array_keys($this->hashMap);
		$this->key = $keys[$this->indice];
	}
	
	public function next() {
		$this->indice++;
		$keys = array_keys($this->hashMap);
		$this->key = $keys[$this->indice];
	}
	
	public function get() {
		return $this->hashMap[$this->key];
	}
	
	private function getHashMap() {
		return $this->hashMap;
	}
}