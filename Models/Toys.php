<?php

class Toy extends Product
{
    public $size;

    public function __construct($size,  $name, $code, $price, Category $category, $image)
    {
        $this->size = $size;

        parent::__construct($name, $code, $price, $category, $image);
    }
}
