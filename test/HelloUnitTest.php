<?php
class HelloUnitTest extends PHPUnit_Framework_TestCase {

	function testHello() {
		$hello = new Hello();
		$this->assertEquals("Hello Worlds", $hello->sayHi());
	}

	function testHello2() {
		$hello = new Hello();
		$this->assertEquals("Hello World", $hello->sayHi());
	}

}

?>
