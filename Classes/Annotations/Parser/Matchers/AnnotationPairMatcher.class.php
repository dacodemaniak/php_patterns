<?php
/**
* @name AnnotationPairMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\SerialMatcher as SerialMatcher;
use \Annotations\Parser\Matchers\AnnotationKeyMatcher as AnnotationKeyMatcher;
use \Annotations\Parser\Matchers\AnnotationValueMatcher as AnnotationValueMatcher;
use \Annotations\Parser\Utilities\RegexMatcher as RegexMatcher;

class AnnotationPairMatcher extends SerialMatcher {
	protected function build() {
		$this->add(new AnnotationKeyMatcher);
		$this->add(new RegexMatcher('\s*=\s*'));
		$this->add(new AnnotationValueMatcher);
	}
	
	protected function process($parts) {
		return array($parts[0] => $parts[2]);
	}
}