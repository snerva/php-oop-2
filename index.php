<?php
/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.
*/

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Categories.php';



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

class Toy extends Product
{
    public $size;

    public function __construct($size,  $name, $code, $price, Category $category, $image)
    {
        $this->size = $size;

        parent::__construct($name, $code, $price, $category, $image);
    }
}

class PetHouse extends Product
{
    public $size;
    public $material;

    public function __construct($size, $material, $name, $code, $price, Category $category, $image)
    {
        $this->size = $size;
        $this->material = $material;

        parent::__construct($name, $code, $price, $category, $image);
    }
}
