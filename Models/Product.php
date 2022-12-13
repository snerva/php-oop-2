<?php

class Product
{
    public $name;
    public $price;
    public $category;
    public $image;

    public function __construct(String $name, Float $price, Category $category, String $image)
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
