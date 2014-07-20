<?php

class Hello {

	function sayHi() {
		return "Hello World";
	}

	function xxx() {
	    return "yyy";
	}
}

$hello = new Hello();
echo("TEST: " . $hello->sayHi());
echo("<br>ZZZZZZZZZ");
?>