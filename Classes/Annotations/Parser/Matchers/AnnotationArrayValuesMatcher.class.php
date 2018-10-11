<?php
/**
* @name AnnotationArrayValuesMatcher.class.php
* @package Annotations\Parser\Matchers
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\ParallelMatcher as ParallelMatcher;
use \Annotations\Parser\Matchers\AnnotationArrayValueMatcher as AnnotationArrayValueMatcher;
use \Annotations\Parser\Matchers\AnnotationMoreValuesMatcher as AnnotationMoreValuesMatcher;

class AnnotationArrayValuesMatcher extends ParallelMatcher {
	protected function build() {
		$this->add(new AnnotationArrayValueMatcher);
		$this->add(new AnnotationMoreValuesMatcher);
	}
}