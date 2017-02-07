<?php
require_once "Timer.php";

class TimerTest extends PHPUnit_Framework_TestCase {
	private $timer;

	protected function setUp() {
		$this->timer = new Timer();
	}
	protected function tearDown() {
		$this->timer = NULL;
	}

	public function testSetTimer() {
		$this->timer->setTimer();
		$result = $this->timer->time;
		$this->assertEquals(0, $result);
	}

	public function addDataProviderTimeString() {
		return array(array(0, "00:00:00"), 
		             array(12, "00:00:12"), 
		             array(66, "00:01:06"),
		             array(4000, "01:06:40"));
	}
	/**
	* @dataProvider addDataProviderTimeString
	*/
	public function testTimeString($a, $expected) {
		$result = $this->timer->timeString($a);
		$this->assertEquals($expected, $result);
	}

	public function addDataProviderPad() {
		return array(array(0, "00"), 
		             array(1, "01"), 
		             array(12, "12"));
	}
	/**
	* @dataProvider addDataProviderPad
	*/
	public function testPad($a, $expected) {
		$result = $this->timer->pad($a);
		$this->assertEquals($expected, $result);
	}
}