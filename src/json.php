<?php
namespace GameCenter;

class Json
{
    public static function encode($data)
    {
        return json_encode($data);
    }

    public static function dncode($data)
    {
        return json_decode($data,true);
    }

}
