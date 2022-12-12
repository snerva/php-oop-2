<?php

class Category
{
    public $animal_type;
    private $icon;

    public function __construct($animal_type)
    {
        $this->animal_type = $animal_type;
        $this->setAnimalIcon();
    }

    public function setAnimalIcon()
    {
        if ($this->animal_type == 'cat') {
            return $this->icon = '<i class="fa-solid fa-cat"></i>';
        } elseif ($this->animal_type == 'dog') {
            return $this->icon = '<i class="fa-solid fa-dog"></i>';
        }
    }

    public function getAnimalIcon()
    {
        return $this->icon;
    }
}
