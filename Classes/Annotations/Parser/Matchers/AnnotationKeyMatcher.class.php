<?php
/**
* @name AnnotationKeyMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\ParallelMatcher as ParallelMatcher;
use \Annotations\Parser\Matchers\AnnotationStringMatcher as AnnotationStringMatcher;
use \Annotations\Parser\Matchers\AnnotationIntegerMatcher as AnnotationIntegerMatcher;
use \Annotations\Parser\Utilities\RegexMatcher as RegexMatcher;

class AnnotationKeyMatcher extends ParallelMatcher {
	protected function build() {
		$this->add(new RegexMatcher('[a-zA-Z][a-zA-Z0-9_]*'));
		$this->add(new AnnotationStringMatcher);
		$this->add(new AnnotationIntegerMatcher);
	}
}