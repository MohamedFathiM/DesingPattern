<?php
require "SimpleFactory.php";

use PHPUnit\Framework\TestCase;

class TestSimpleFactory extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();

        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}
