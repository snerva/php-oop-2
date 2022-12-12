<?php

class Food extends Product
{
    public $taste;
    public $weight;
    public $ingredients;
    public $type;

    public function __construct($taste, $weight, $ingredients, $type, $name, $code, $price, Category $category, $image)
    {
        $this->taste = $taste;
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        $this->type = $type;

        parent::__construct($name, $code, $price, $category, $image);
    }
}
