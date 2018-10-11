<?php
/**
* @name AnnnotationSingleQuotedStringMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Utilities\RegexMatcher as RegexMatcher;

class AnnotationSingleQuotedStringMatcher extends RegexMatcher {
	public function __construct() {
		parent::__construct("'([^']*)'");
	}
	
	protected function process($matches) {
		return $matches[1];
	}
}