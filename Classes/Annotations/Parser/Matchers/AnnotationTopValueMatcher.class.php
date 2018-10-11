<?php
/**
* @name AnnotationTopValueMatcher.class.php
* @package Annotations\Parser
*/

namespace Annotations\Parser\Matchers;

use Annotations\Parser\Matchers\AnnotationValueMatcher as AnnotationValueMatcher;

class AnnotationTopValueMatcher extends AnnotationValueMatcher {
	protected function process($value) {
		return array('value' => $value);
	}
}