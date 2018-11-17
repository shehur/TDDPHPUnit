<?php
use PHPUnit\Framework\TestCase;

include 'soma.php';

class SomaTest extends TestCase {

	public function testSoma() {
		$this->assertEquals(5, somar(2, 3));
	}

}
