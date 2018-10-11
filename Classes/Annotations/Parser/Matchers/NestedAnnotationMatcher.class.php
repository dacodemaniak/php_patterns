<?php
/**
* @name NestedAnnotationMatcher.class.php
* @namespace Annotations\Parser\Matchers
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\AnnotationMatcher as AnnotationMatcher;
use \Annotations\AnnotationsBuilder as AnnotationsBuilder;

class NestedAnnotationMatcher extends AnnotationMatcher {
	protected function process($result) {
		$builder = new AnnotationsBuilder;
		return $builder->instantiateAnnotation($result[1], $result[2]);
	}
}	