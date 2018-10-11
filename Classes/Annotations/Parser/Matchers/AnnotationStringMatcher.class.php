<?php
/**
* @name AnnotationStringMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\ParallelMatcher as ParallelMatcher;
use \Annotations\Parser\Matchers\AnnotationDoubleQuotedStringMatcher;
use \Annotations\Parser\Matchers\AnnotationSingleQuotedStringMatcher;

class AnnotationStringMatcher extends ParallelMatcher {
	protected function build() {
		$this->add(new AnnotationSingleQuotedStringMatcher);
		$this->add(new AnnotationDoubleQuotedStringMatcher);
	}
}