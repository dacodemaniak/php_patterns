<?php
/**
* @name AnnotationIntegerMatcher.class.php
* @package Annotation\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Utilities\RegexMatcher as RegexMatcher;

class AnnotationIntegerMatcher extends RegexMatcher {
	public function __construct() {
		parent::__construct("-?[0-9]*");
	}
	
	protected function process($matches) {
		return (int) $matches[0];
	}
}