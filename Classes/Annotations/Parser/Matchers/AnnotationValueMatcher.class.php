<?php
/**
* @name AnnotationValueMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\ParallelMatcher as ParallelMatcher;
use \Annotations\Parser\Matchers\ConstantMatcher as ConstantMatcher;
use \Annotations\Parser\Matchers\AnnotationStringMatcher as AnnotationStringMatcher;
use \Annotations\Parser\Matchers\AnnotationNumberMatcher as AnnotationNumberMatcher;
use \Annotations\Parser\Matchers\AnnotationArrayMatcher as AnnotationArrayMatcher;
use \Annotations\Parser\Matchers\AnnotationStaticConstantMatcher as AnnotationStaticConstantMatcher;
use \Annotations\Parser\Matchers\NestedAnnotationMatcher as NestedAnnotationMatcher;

class AnnotationValueMatcher extends ParallelMatcher {
	protected function build() {
		$this->add(new ConstantMatcher('true', true));
		$this->add(new ConstantMatcher('false', false));
		$this->add(new ConstantMatcher('TRUE', true));
		$this->add(new ConstantMatcher('FALSE', false));
		$this->add(new ConstantMatcher('NULL', null));
		$this->add(new ConstantMatcher('null', null));
		$this->add(new AnnotationStringMatcher);
		$this->add(new AnnotationNumberMatcher);
		$this->add(new AnnotationArrayMatcher);
		$this->add(new AnnotationStaticConstantMatcher);
		$this->add(new NestedAnnotationMatcher);
	}
}