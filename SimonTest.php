<?php
require "Simon.php";

class SimonTest extends PHPUnit_Framework_TestCase {
	private $simon;

	protected function setUp() {
		$this->simon = new Simon();
	}
	protected function tearDown() {
		$this->simon = NULL;
	}

	public function testSecho1() {
		$result = $this->simon->secho("hello");
		$this->assertEquals("hello", $result);
	}
	public function testSecho2() {
		$result = $this->simon->secho("bye");
		$this->assertEquals("bye", $result);
	}

	public function testSshout1() {
		$result = $this->simon->sshout("hello");
		$this->assertEquals("HELLO", $result);
	}
	public function testSshout2() {
		$result = $this->simon->sshout("hello world");
		$this->assertEquals("HELLO WORLD", $result);
	}

	public function testSrepeat1() {
		$result = $this->simon->srepeat("hello");
		$this->assertEquals("hello hello", $result);
	}
	public function testSrepeat2() {
		$result = $this->simon->srepeat("hello", 3);
		$this->assertEquals("hello hello hello", $result);
	}

	public function addDataProviderStart() {
		return array(array("hello", 1, "h"), 
		             array("Bob", 2, "Bo"), 
		             array("abcdefg", 1, "a"),
		             array("abcdefg", 2, "ab"),
		             array("abcdefg", 3, "abc"));
	}
	/**
	* @dataProvider addDataProviderStart
	*/
	public function testSstart($str, $count, $expected) {
		$result = $this->simon->sstart($str, $count);
		$this->assertEquals($expected, $result);
	}

	public function testSword1() {
		$result = $this->simon->sword("Hello World");
		$this->assertEquals("Hello", $result);
	}
	public function testSword2() {
		$result = $this->simon->sword("oh dear");
		$this->assertEquals("oh", $result);
	}

	public function addDataProviderTitle() {
		return array(array("jaws", "Jaws"), 
		             array("david copperfield", "David Copperfield"), 
		             array("war and peace", "War And Peace"));
	}
	/**
	* @dataProvider addDataProviderTitle
	*/
	public function testStitle($str, $expected) {
		$result = $this->simon->stitle($str);
		$this->assertEquals($expected, $result);
	}
}