<?php
require "temperature.php";

class TemperatureTest extends PHPUnit_Framework_TestCase {
	private $temperature;

	protected function setUp() {
		$this->temperature = new Temperature();
	}
	protected function tearDown() {
		$this->temperature = NULL;
	}

	public function testFtoc1() {
		$result = $this->temperature->ftoc(32);
		$this->assertEquals(0, $result);
	}
	public function testFtoc2() {
		$result = $this->temperature->ftoc(212);
		$this->assertEquals(100, $result);
	}
	public function testFtoc3() {
		$result = $this->temperature->ftoc(98.6);
		$this->assertEquals(37, $result);
	}
	public function testFtoc4() {
		$result = $this->temperature->ftoc(68);
		$this->assertEquals(20, $result);
	}

	public function testCtof1() {
		$result = $this->temperature->ctof(0);
		$this->assertEquals(32, $result);
	}
	public function testCtof2() {
		$result = $this->temperature->ctof(100);
		$this->assertEquals(212, $result);
	}
	public function testCtof3() {
		$result = $this->temperature->ctof(20);
		$this->assertEquals(68, $result);
	}
	public function testCtof4() {
		$result = $this->temperature->ctof(37);
		$this->assertEquals(98.6, $result);
	}
}
