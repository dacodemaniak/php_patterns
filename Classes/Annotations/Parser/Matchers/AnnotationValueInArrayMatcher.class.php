<?php
/**
* @name AnnotationValueInArrayMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\AnnotationValueMatcher as AnnotationValueMatcher;

class AnnotationValueInArrayMatcher extends AnnotationValueMatcher {
	public function process($value) {
		return array($value);
	}
}