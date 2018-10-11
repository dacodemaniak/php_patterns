<?php
/**
* @name AnnotationMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\SerialMatcher as SerialMatcher;
use \Annotations\Parser\Matchers\AnnotationParametersMatcher as AnnotationParametersMatcher;
use \Annotations\Parser\Utilities\RegexMatcher as RegexMatcher;

class AnnotationMatcher extends SerialMatcher {
	protected function build() {
		$this->add(new RegexMatcher('@'));
		$this->add(new RegexMatcher('[A-Z][a-zA-Z0-9_\\\\]*'));
		$this->add(new AnnotationParametersMatcher);
	}
	
	protected function process($results) {
		return array($results[1], $results[2]);
	}
}