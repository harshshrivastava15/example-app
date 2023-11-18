<?php

/**
 * Class Practical
 *
 * Contains static functions for practical tasks.
 */
class Practical
{
    /**
     * Prints "Hello, World!"
     */
    public static function printHello()
    {
        echo "Hello, World!";
    }

    /**
     * Adds two numbers and returns the sum.
     *
     * @param int|float $num1 The first number.
     * @param int|float $num2 The second number.
     *
     * @return int|float The sum of the two numbers.
     */
    public static function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    /**
     * Generates a Fibonacci sequence containing 'n' integers.
     *
     * @param int $n The number of elements in the Fibonacci sequence.
     *
     * @return array The Fibonacci sequence as an array.
     */
    public static function generateFibonacciSequence($n)
    {
        $sequence = [];

        if ($n >= 1) {
            $sequence[] = 0;
        }

        if ($n >= 2) {
            $sequence[] = 1;
            for ($i = 2; $i < $n; $i++) {
                // Each subsequent number is the sum of the two preceding ones
                $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
            }
        }

        return $sequence;
    }
}

?>
