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



    //Expected value for integer serialization:
    // '14' -> "i:14;"
    public function testCanSerializeInteger()
    {
        $this->assertSame("i:14;", serializeInteger(14));
    }



    //Expected value for double serialization:
    // '30.98' -> "d:30.98;"
    public function testCanSerializeDouble()
    {
        $this->assertSame("d:30.98;",serializeDouble(30.98));
    }



    //Expected value for string serialization:
    // "The sea is blue." -> "s:16:"The sea is blue.";"
    public function testCanSerializeString()
    {
        $this->assertSame("s:" . strlen("The sea is blue.") . ":\"" . "The sea is blue." . "\";",
                            serializeString("The sea is blue."));
    }



    //Tests if mySerialization acts like PHP serialize function.
    public function testMySerialize()
    {
        //$this->assertSame(mySerialize(null), serialize(null));
        $this->assertSame(
            '1-1-1-1-1-1',
            implode ('-',
            [
                (mySerialize(null) === serialize(null)),
                (mySerialize(true) === serialize(true)),
                (mySerialize(false) === serialize(false)),
                (mySerialize(14) === serialize(14)),
                (mySerialize(15.68) === serialize(15.68)),
                (int) ( (mySerialize("moon") === serialize("moon")) )
                //(int) ( strcmp(mySerialize("moon"), serialize("moon")) )
            ])
        );
    }
}