<?php

namespace Iqbal\FizzBuzz;

class FizzBuzz
{
     public function fizzBuzz(int $total): void
     {
          for ($i = 1; $i <= $total; $i++) {
               if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "FizzBuzz" . PHP_EOL;
               } else if ($i % 3 == 0) {
                    echo "Fizz" . PHP_EOL;
               } else if ($i % 5 == 0) {
                    echo "Bazz" . PHP_EOL;
               } else {
                    echo $i . PHP_EOL;
               }
          }
     }
}
