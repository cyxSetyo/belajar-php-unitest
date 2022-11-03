<?php

namespace BelajarPhpUnitest\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{
    public function testCounter()
    {
        $counter = new Counter;
        $counter->increment();
        $counter->increment();
        //echo $counter->getCounter() . PHP_EOL;
        Assert::assertEquals(2, $counter->getCounter());
    }
}