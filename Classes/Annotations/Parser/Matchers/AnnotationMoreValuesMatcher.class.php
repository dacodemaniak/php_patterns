<?php
/**
* @name AnnotationMoreValuesMatcher.class.php
* @package Annotations\Parser
*/
namespace Annotations\Parser\Matchers;

use \Annotations\Parser\Matchers\SimpleSerialMatcher as SimpleSerialMatcher;
use \Annotations\Parser\Matchers\AnnotationArrayValueMatcher as AnnotationArrayValueMatcher;
use \Annotations\Parser\Matchers\AnnotationArrayValuesMatcher as AnnotationArrayValuesMatcher;
use \Annotations\Parser\Utilities\RegexMatcher as RegexMatcher;

class AnnotationMoreValuesMatcher extends SimpleSerialMatcher {
	protected function build() {
		$this->add(new AnnotationArrayValueMatcher);
		$this->add(new RegexMatcher('\s*,\s*'));
		$this->add(new AnnotationArrayValuesMatcher);
	}
	
	protected function match($string, &$value) {
		$result = parent::match($string, $value);
		return $result;
	}
	
	public function process($parts) {
		return array_merge($parts[0], $parts[2]);
	}
}