<?php
class HelloUnitTest extends PHPUnit_Framework_TestCase {

	function testHello() {
		//Arrange
		$hello = new Hello();
		$expectedResult = "Hello World";

		//Act
		$actualResult = $hello->sayHi();

		//Assert
		$this->assertEquals($expectedResult, $actualResult);
	}

}
?>

