<?php
/**
* @name AnnotationParametersMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\ParallelMatcher as ParallelMatcher;
use \Annotations\Parser\Matchers\ConstantMatcher as ConstantMatcher;
use \Annotations\Parser\Matchers\SimpleSerialMatcher as SimpleSerialMatcher;
use \Annotations\Parser\Matchers\AnnotationValuesMatcher as AnnotationValuesMatcher;
use \Annotations\Parser\Utilities\RegexMatcher as RegexMatcher;

class AnnotationParametersMatcher extends ParallelMatcher {
	protected function build() {
		$this->add(new ConstantMatcher('', array()));
		$this->add(new ConstantMatcher('\(\)', array()));
		$params_matcher = new SimpleSerialMatcher(1);
		$params_matcher->add(new RegexMatcher('\(\s*'));
		$params_matcher->add(new AnnotationValuesMatcher);
		$params_matcher->add(new RegexMatcher('\s*\)'));
		$this->add($params_matcher);
	}
}