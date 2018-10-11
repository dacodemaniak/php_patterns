<?php
/**
* @name AnnotationArrayValueMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\ParallelMatcher as ParallelMatcher;
use \Annotations\Parser\Matchers\AnnotationValueInArrayMatcher as AnnotationValueInArrayMatcher;
use \Annotations\Parser\Matchers\AnnotationPairMatcher as AnnotationPairMatcher;

class AnnotationArrayValueMatcher extends ParallelMatcher {
	protected function build() {
		$this->add(new AnnotationValueInArrayMatcher);
		$this->add(new AnnotationPairMatcher);
	}
}