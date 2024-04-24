<?php

// Use the namespace app to organize classes
namespace App;

class SodaMachine {

  // Variables
  private $cans;

  // Methods

  // Returns the amount of cans in the machine
  public function getCans(){
    return $this->cans;
  }

  // Fill the machine to the specified amount of cans
  public function setCans( $amount ){
    $this->cans = $amount;
  }

  // Processes a can purchase
  public function buyCan(){
    $this->setCans( $this->getCans() - 1 );
  }

}

?>