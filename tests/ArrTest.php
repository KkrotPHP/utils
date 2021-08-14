<?php

use PHPUnit\Framework\TestCase;

class ArrTest extends TestCase
{
    public function testArr(){
        $this->assertIsArray([]);
    }

    public function testIsNotArray(){
        $this->assertIsNotArray('');
    }
}