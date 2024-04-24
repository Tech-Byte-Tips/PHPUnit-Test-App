<?php

// Use the same namespace as the app
namespace App;

// Make sure we have access to the class that we are testing
require 'app/SodaMachine.php';

/**
 * @covers \App\SodaMachine
*/
class SodaMachineTest extends \PHPUnit\Framework\TestCase{
  // Variables
  
  // Define an instance of the Soda Machine
  public $sodaMachine;

  // Functions

  // Instantiate the machine (make sure to mark it returns void or PHPUnit complains)
  public function setUp(): void {
    $this->sodaMachine = new SodaMachine();
  }
  
  /**
   * Test the machine functionality
   * @covers \App\SodaMachine::buyCan
  */
  public function testCanPurchase(){
    // Start with 10 cans
    $this->sodaMachine->setCans( 10 );
    // Buy a can
    $this->sodaMachine->buyCan();
    // Validate it processed it right and we have 9 left
    $this->assertEquals( 9, $this->sodaMachine->getCans() );
  }
  
}

?>