<?php
	require_once('Calculator.php');

	class CalculatoTest extends PHPUnit_Framework_TestCase{
		private $calculator;

		public function setUp(){
			$this->calculator = new Calculator();
		}

		public function tearDown(){
			$this->calculator = NULL;
		}

	 	public function testAdd(){
	        $result = $this->calculator->add(2, 3);
	        $this->assertEquals(5, $result);
	    }

	    public function testSubtract(){
	        $result = $this->calculator->subtrac(4, 5);
	        $this->assertEquals(2, $result); //should be fail
	    }

	    public function testMultiply(){
	        $result = $this->calculator->multiply(1, 2);
	        $this->assertEquals(2, $result);
	    }

	    public function testDivide(){
	        $result = $this->calculator->divide(6, 0);
	        $this->assertEquals(3, $result); // should be fail 
	    }
	}
?>