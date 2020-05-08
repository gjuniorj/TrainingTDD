<?php

use PHPUnit\Framework\TestCase;

require_once('mySerialize.php');

class TDD_MySerialize extends TestCase
{

    public function testCanSerializeNull()
    {
        $this->assertSame("N;",serializeNull(null));
    }
}