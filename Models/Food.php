<?php

class Food extends Product
{
    public $taste;
    public $weight;
    public $ingredients;
    public $type;

    public function __construct($taste, $weight, $ingredients, $type, $name, $price, Category $category, $image)
    {
        $this->taste = $taste;
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        $this->type = $type;

        parent::__construct($name, $price, $category, $image);
    }
}
