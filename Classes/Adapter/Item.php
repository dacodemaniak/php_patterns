<?php
/**
* @name Item Interface de définition d'un élément de HashMap
* @package Adapter
* @version 1.0.0
*/
namespace Adapter;

interface Item {
	public function setKey(string $key);
	public function setValue(string $value);
	public function add();
	public function getHashMap();
}