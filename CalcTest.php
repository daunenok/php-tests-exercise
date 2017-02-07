<?php
require "Calc.php";

class CalcTest extends PHPUnit_Framework_TestCase {
	private $calc;

	protected function setUp() {
		$this->calc = new Calc();
	}
	protected function tearDown() {
		$this->calc = NULL;
	}

	public function addDataProviderAdd() {
		return array(array(0, 0, 0), 
		             array(2, 2, 4), 
		             array(2, 6, 8));
	}
	/**
	* @dataProvider addDataProviderAdd
	*/

	public function testAdd($a, $b, $expected) {
		$result = $this->calc->add($a, $b);
		$this->assertEquals($expected, $result);
	}

	public function addDataProviderSubtract() {
		return array(array(10, 4, 6), 
		             array(25, 9, 16));
	}
	/**
	* @dataProvider addDataProviderSubtract
	*/

	public function testSubtract($a, $b, $expected) {
		$result = $this->calc->subtract($a, $b);
		$this->assertEquals($expected, $result);
	}

	public function addDataProviderSum() {
		return array(array([], 0), 
		             array([7], 7),
		             array([7, 11], 18),
		             array([1, 3, 5, 7, 9], 25));
	}
	/**
	* @dataProvider addDataProviderSum
	*/

	public function testSum($arr, $expected) {
		$result = $this->calc->sum($arr);
		$this->assertEquals($expected, $result);
	}

	public function addDataProviderMultiply() {
		return array(array([5, 3], 15), 
		             array([2, 3, 5, 6], 180));
	}
	/**
	* @dataProvider addDataProviderMultiply
	*/

	public function testMultiply($arr, $expected) {
		$result = $this->calc->multiply($arr);
		$this->assertEquals($expected, $result);
	}

	public function addDataProviderPower() {
		return array(array(2, 3, 8), 
		             array(5, 4, 625));
	}
	/**
	* @dataProvider addDataProviderPower
	*/

	public function testPower($a, $b, $expected) {
		$result = $this->calc->power($a, $b);
		$this->assertEquals($expected, $result);
	}

	public function addDataProviderFactorial() {
		return array(array(0, 0), 
		             array(1, 1),
		             array(2, 2),
		             array(5, 120));
	}
	/**
	* @dataProvider addDataProviderFactorial
	*/

	public function testFactorial($a, $expected) {
		$result = $this->calc->factorial($a);
		$this->assertEquals($expected, $result);
	}
}