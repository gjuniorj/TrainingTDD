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


function mySerialize($data)
{
    if ( is_null($data) )
        return serializeNull();

    if ( is_bool($data) )
        return serializeBoolean($data);
}