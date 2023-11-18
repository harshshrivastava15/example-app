<?php

class Practical {
    /**
     * Prints "Hello, World!"
     */
    public static function printHello() {
        echo "Hello, World!";
    }

    /**
     * Adds two numbers and returns the sum.
     * @param int $num1 The first number to be added.
     * @param int $num2 The second number to be added.
     * @return int The sum of $num1 and $num2.
     */
    public static function add($num1, $num2) {
        if(!is_numeric($num1) || !is_numeric($num2))
        {
            throw new \InvalidArgumentException("Arguments must be numeric");
        }
        return $num1 + $num2;
    }

    /**
     * Generates a Fibonacci sequence containing 'n' integers.
     * @param int $n The number of Fibonacci numbers to generate.
     * @return array An array containing the first 'n' Fibonacci numbers.
     */
    public static function generateFibonacciSequence($n) {
        if(!is_int($n))
        {
            throw new \InvalidArgumentException("Arguments must be Integer");
        }
        $fibonacciSequence = array();
        if ($n >= 1) {
            $fibonacciSequence[] = 0;
        }
        if ($n >= 2) {
            $fibonacciSequence[] = 1;
        }
        for ($i = 2; $i < $n; $i++) {
            $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
        }
        return $fibonacciSequence;
    }
}

?>

