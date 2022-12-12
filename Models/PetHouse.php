<?php

class PetHouse extends Product
{
    public $size;
    public $material;

    public function __construct($size, $material, $name, $price, Category $category, $image)
    {
        $this->size = $size;
        $this->material = $material;

        parent::__construct($name, $price, $category, $image);
    }
}
