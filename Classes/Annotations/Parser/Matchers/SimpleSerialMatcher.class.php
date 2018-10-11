<?php
/**
* @name SimpleSerialMatcher.class.php
* @package Annotations\Parser
*/

namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\SerialMatcher as SerialMatcher;

class SimpleSerialMatcher extends SerialMatcher {
	private $return_part_index;
	
	public function __construct($return_part_index = 0) {
		$this->return_part_index = $return_part_index;
	}
	
	public function process($parts) {
		return $parts[$this->return_part_index];
	}
}