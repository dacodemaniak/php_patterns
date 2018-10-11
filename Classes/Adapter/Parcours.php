<?php
/**
 * @name Parcours Interface de définition du mode de parcours d'une collection
 * @package Adapter
 * @version 1.0.0
 */
namespace Adapter;

interface Parcours {
	public function reset();
	public function last();
	public function next();
	public function get();
}
