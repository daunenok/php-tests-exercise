<?php
require "Pig.php";

class PigTest extends PHPUnit_Framework_TestCase {
	private $pig;

	protected function setUp() {
		$this->pig = new Pig();
	}
	protected function tearDown() {
		$this->pig = NULL;
	}

	public function addDataProvider() {
		return array(array("apple", "appleay"), 
		             array("banana", "ananabay"),
		             array("cherry", "errychay"),
		             array("eat pie", "eatay iepay"),
		             array("three", "eethray"),
		             array("school", "oolschay"),
		             array("quiet", "ietquay"),
		             array("square", "aresquay"),
		             array("the quick brown fox","ethay ickquay ownbray oxfay", "ethay ickquay ownbray oxfay"),
		             array("One Two three four", "Oneay Otway eethray ourfay"));
	}
	/**
	* @dataProvider addDataProvider
	*/
	public function testTranslate($a, $expected) {
		$result = $this->pig->translate($a);
		$this->assertEquals($expected, $result);
	}
}