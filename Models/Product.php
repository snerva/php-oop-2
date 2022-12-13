<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $image;

    public function __construct($name, $price, Category $category, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image =  $image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
