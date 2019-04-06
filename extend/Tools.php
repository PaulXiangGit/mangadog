<?php

class Tools
{

    public static function JSONReturn($result)
    {
        return json_encode($result, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}