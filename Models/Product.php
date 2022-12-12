<?php

class Product
{
    public $name;
    public $code;
    public $price;
    public $category;
    public $image;

    public function __construct($name, $code, $price, Category $category, $image)
    {
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->category = $category;
        $this->image =  $image;
    }
}
