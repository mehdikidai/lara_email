<?php

namespace App\Services;

class Kidai
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function md5($text)
    {
        return md5($text);
    }

    public function checkmd5(string $hash,string $text){
        return $hash === md5($text);
    }
}
