<?php

class Toy extends Product
{
    public $size;

    public function __construct($size,  $name, $price, Category $category, $image)
    {
        $this->size = $size;

        parent::__construct($name, $price, $category, $image);
    }
}
