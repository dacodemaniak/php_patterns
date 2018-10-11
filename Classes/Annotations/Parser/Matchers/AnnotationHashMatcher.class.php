<?php
/**
* @name AnnotationHashMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\ParallelMatcher as ParallelMatcher;
use \Annotations\Parser\Matchers\AnnotationPairMatcher as AnnotationPairMatcher;
use \Annotations\Parser\Matchers\AnnotationMorePairsMatcher as AnnotationMorePairsMatcher;

class AnnotationHashMatcher extends ParallelMatcher {
	protected function build() {
		$this->add(new AnnotationPairMatcher);
		$this->add(new AnnotationMorePairsMatcher);
	}
}