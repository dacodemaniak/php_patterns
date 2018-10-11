<?php
/**
* @name AnnotationArrayMatcher.class.php
* @package Annotations\Parser\Matchers
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\ParallelMatcher as ParallelMatcher;
use \Annotations\Parser\Matchers\ConstantMatcher as ConstantMatcher;
use \Annotations\Parser\Matchers\SimpleSerialMatcher as SimpleSerialMatcher;
use \Annotations\Parser\Matchers\AnnotationArrayValuesMatcher as AnnotationArrayValuesMatcher;
use \Annotations\Parser\Utilities\RegexMatcher as RegexMatcher;

class AnnotationArrayMatcher extends ParallelMatcher {
	protected function build() {
		$this->add(new ConstantMatcher('{}', array()));
		$values_matcher = new SimpleSerialMatcher(1);
		$values_matcher->add(new RegexMatcher('\s*{\s*'));
		$values_matcher->add(new AnnotationArrayValuesMatcher);
		$values_matcher->add(new RegexMatcher('\s*}\s*'));
		$this->add($values_matcher);
	}
}