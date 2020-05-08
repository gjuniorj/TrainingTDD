<?php


function serializeNull()
{
    return "N;";
}


function serializeBoolean($data)
{
    if ( $data == true )
        return "b:1;";
    else
        return "b:0;";
}


function serializeInteger($data)
{
    if ( is_int($data) )
        return "i:".$data.";";
    else
        throw new Exception('ERROR - serializeInteger - Data is not an integer.');
}


function serializeDouble($data)
{
    if ( is_double($data) )
        return "d:".$data.";";
    else
        throw new Exception('ERROR - serializeDouble - Data is not a double.');
}



function mySerialize($data)
{
    if ( is_null($data) )
        return serializeNull();

    if ( is_bool($data) )
        return serializeBoolean($data);

    if ( is_int($data) )
        return serializeInteger($data);

    if ( is_double($data) )
        return serializeDouble($data);

}