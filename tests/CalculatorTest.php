<?php

namespace App;

// Require the Calculator app
require_once 'app/Calculator.php';

/**
    * @covers \App\Calculator
*/
class CalculatorTest extends \PHPUnit\Framework\TestCase {
    
    /**
    * @covers \App\Calculator::add
    */
    // Test the calculator's add function
    public function testAdd(){
        
        // Make a calculator
        $calculator = new Calculator;

        $result = $calculator->add(20, 5);

        // Check if the result equals 25
        $this->assertEquals(25, $result);
    }

    /**
    * @covers \App\Calculator::subtract
    */
    // Test the calculator's subtract function
    public function testSubtract(){
        
        // Make a calculator
        $calculator = new Calculator;

        $result = $calculator->subtract(20, 5);

        // Check if the result equals 15
        $this->assertEquals(15, $result);
    }

    /**
    * @covers \App\Calculator::multiply
    */
    // Test the calculator's Multiply function
    public function testMultiply(){
        
        // Make a calculator
        $calculator = new Calculator;

        $result = $calculator->multiply(4, 5);

        // Check if the result equals 15
        $this->assertEquals(20, $result);
    }

    /**
    * @covers \App\Calculator::divide
    */
    // Test the calculator's Divide function
    public function testDivide(){
        
        // Make a calculator
        $calculator = new Calculator;

        $result = $calculator->divide(20, 5);

        // Check if the result equals 15
        $this->assertEquals(4, $result);
    }

    /**
    * @covers \App\Calculator::divide
    */
    // // Test the calculator's Divide function
    // public function testDivideByZero(){
        
    //     // Make a calculator
    //     $calculator = new Calculator;

    //     $result = $calculator->divide(20, 0);

    //     // Should not equal 20, should fail!
    //     $this->assertEquals(20, $result);
    // }
}

?>