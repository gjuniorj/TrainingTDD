<?php


function serializeNull()
{
    return "N;";
}


function mySerialize($data)
{
    if ( is_null($data) )
        return "N;";
}