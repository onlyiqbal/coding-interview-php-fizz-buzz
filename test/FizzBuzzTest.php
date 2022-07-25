<?php

namespace Iqbal\FizzBuzz;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
     public function testFizzBuzz()
     {
          $fizzBuzz = new FizzBuzz();
          $fizzBuzz->fizzBuzz(50);
     }
}
