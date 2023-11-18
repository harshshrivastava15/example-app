<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../practicals/Practical.php');
use practicals\Practical;

class PracticalTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdd(): void
    {
        $this->assertEquals(Practical::add(1.5,3), 4.5);
        $this->assertEquals(Practical::add(1,3), 4);
        $this->assertEquals(Practical::add("1.5","3"), 4.5);
    }

    public function testAddNumeric(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::add("abc","xyz");
    }

    public function testFibonacci(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence(5.5);
        $this->expectException(\InvalidArgumentException::class);
        Practical::generateFibonacciSequence("5.5");
        //$this->assertEquals(Practical::generateFibonacciSequence("5"),);
    }
}

?>
