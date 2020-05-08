<?php

use PHPUnit\Framework\TestCase;

require_once('mySerialize.php');

class TDD_MySerialize extends TestCase
{

    //Expected value for null serialization: "N;"
    public function testCanSerializeNull()
    {
        $this->assertSame("N;",serializeNull());
    }



    //Expected values for boolean serialization:
    // true -> "b:1;"
    // false -> "b:0;"
    public function testCanSerializeBoolean()
    {
        //This strategy assumes that a valid test case will return 1.
        // Then, when using assertSame, it will compare the expected array [1-1] with the test cases array.
        $this->assertSame(
            '1-1',
            implode('-', [
                (serializeBoolean(true) === "b:1;"),
                (serializeBoolean(false) === "b:0;"),
            ])
        );
    }



    public function test


    //Tests if mySerialization acts like PHO serialize function.
    public function testMySerialize()
    {
        //$this->assertSame(mySerialize(null), serialize(null));
        $this->assertSame(
            '1-1-1',
            implode ('-',
            [
                (mySerialize(null) === serialize(null)),
                (mySerialize(true) === serialize(true)),
                (mySerialize(false) === serialize(false))
            ])
        );
    }
}