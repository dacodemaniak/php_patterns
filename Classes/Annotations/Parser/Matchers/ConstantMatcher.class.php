<?php
/**
* @name ConstantMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Utilities\RegexMatcher as RegexMatcher;

class ConstantMatcher extends RegexMatcher {
	private $constant;
	
	public function __construct($regex, $constant) {
		parent::__construct($regex);
		$this->constant = $constant;
	}
	
	protected function process($matches) {
		return $this->constant;
	}
}