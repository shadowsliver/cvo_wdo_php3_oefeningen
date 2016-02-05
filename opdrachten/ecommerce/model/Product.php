<?php

/**
 * Created by PhpStorm.
 * User: Michel
 * Date: 4/02/2016
 * Time: 1:28
 */
class Product
{
    public $name = "OnePlus One";
    public $owned = 0;
    public $sold = 0;

    public function __construct($owned, $sold)
    {
        $this->owned = $owned;
        $this->sold = $sold;
    }

    public function InStock(){
        return $this->owned - $this->sold;
    }
}