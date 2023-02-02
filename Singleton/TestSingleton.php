<?php

require "Singleton.php";

use PHPUnit\Framework\TestCase;

class TestSingleton extends TestCase
{
    public function testUniqueness()
    {
        $firstObject = Singleton::getInstance();
        $secondObject = Singleton::getInstance();


        $this->assertInstanceOf(Singleton::class, $firstObject);
        $this->assertSame($secondObject, $firstObject);
    }
}
