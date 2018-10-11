<?php
/**
* @name AnnotationNumberMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Utilities\RegexMatcher as RegexMatcher;

class AnnotationNumberMatcher extends RegexMatcher {
	public function __construct() {
		parent::__construct("-?[0-9]*\.?[0-9]*");
	}
	
	protected function process($matches) {
		$isFloat = strpos($matches[0], '.') !== false;
		return $isFloat ? (float) $matches[0] : (int) $matches[0];
	}
}