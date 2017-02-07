<?php
require "book.php";

class BookTest extends PHPUnit_Framework_TestCase {
	private $book;

	protected function setUp() {
		$this->book = new Book();
	}
	protected function tearDown() {
		$this->book = NULL;
	}


	public function addDataProvider() {
		return array(array("inferno", "Inferno"), 
		             array("stuart little", "Stuart Little"),
		             array("alexander the great", "Alexander the Great"),
		             array("to kill a mockingbird", "To Kill a Mockingbird"),
		             array("to eat an apple a day", "To Eat an Apple a Day"),
		             array("war and peace", "War and Peace"),
		             array("love in the time of cholera", "Love in the Time of Cholera"),
		             array("what i wish i knew when i was 20", "What I Wish I Knew When I Was 20"),
		             array("the man in the iron mask", "The Man in the Iron Mask"));
	}
	/**
	* @dataProvider addDataProvider
	*/
	public function testTitle($a, $expected) {
		$result = $this->book->title($a);
		$this->assertEquals($expected, $result);
	}
}