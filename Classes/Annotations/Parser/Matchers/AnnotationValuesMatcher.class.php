<?php
/**
* @name AnnotationValuesMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\ParallelMatcher as ParallelMatcher;
use \Annotations\Parser\Matchers\AnnotationTopValueMatcher as AnnotationTopValueMatcher;
use \Annotations\Parser\Matchers\AnnotationHashMatcher as AnnotationHashMatcher;

class AnnotationValuesMatcher extends ParallelMatcher {
	protected function build() {
		$this->add(new AnnotationTopValueMatcher);
		$this->add(new AnnotationHashMatcher);
	}
}