<?php
require_once "Hello.php";

class HelloTest extends PHPUnit_Framework_TestCase {
	private $hello;

	protected function setUp() {
		$this->hello = new Hello();
	}
	protected function tearDown() {
		$this->hello = NULL;
	}

	public function testHi() {
		$result = $this->hello->hi();
		$this->assertEquals("Hello!", $result);
	}

	public function testGreet() {
		$result = $this->hello->greet("Alice");
		$this->assertEquals("Hello, Alice!", $result);
	}

	public function testGreet2() {
		$result = $this->hello->greet("Bob");
		$this->assertEquals("Hello, Bob!", $result);
	}
}