<?php
use PHPUnit\Framework\TestCase;

require './src/Calculator.php';
class CalculatorTest extends Testcase
{
    public function testfactorial(){
        $c=new Calculator ;
        $result=$c->factorial(0);
        $this->assertEquals(1,$result);
        $result=$c->factorial(1);
        $this->assertEquals(1,$result);
        $result=$c->factorial(5);
        $this->assertEquals(120,$result);
        $result=$c->factorial(-3);
        $this->assertEquals(null,$result);
        $result=$c->factorial(1.5);
        $this->assertEquals(null,$result);
        $result=$c->factorial(false);
        $this->assertEquals(null,$result);
        $result=$c->factorial('abc');
        $this->assertEquals(null,$result);
        
    }
    
    
    }
    
?>