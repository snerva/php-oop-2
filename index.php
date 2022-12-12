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
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toys.php';
require_once __DIR__ . '/Models/PetHouse.php';


$crocchette = new Food('Manzo', '2kg', 'manzo (31,3%, di cui 26% manzo fresco, 5,3% manzo essiccato), mais, pollo essiccato (16,5%), riso,
farina di riso integrale, proteine animali idrolizzate, grasso di pollo, olio di salmone (fonte naturale di Omega 3), minerali, mannano-oligosaccaridi (0,1%), inulina derivante dalla cicoria [fonte di FOS] (0,1%).', 'Secco', 'Almo Nature Holistic con Manzo Fresco', '11.99 €', new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/con/manzo/fresco/6/800/68102_pla_almonature_rind_reis_2kg_6.jpg');

$osso = new Toy('s', 'Nylabone Dura Chew Chicken Osso gioco', '7.90 €', new Category('dog'), 'https://shop-cdn-m.mediazs.com/bilder/nylabone/dura/chew/chicken/osso/gioco/2/800/58927_pla_interpet_nylabone_durachewchicken_hs_01_2.jpg');

$lettinoDaParete = new PetHouse('L 48 x P 42 x H 24 cm', 'Polyester, wood', 'Lettino a parete Natural Paradise Dahlia', '29.49 €', new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/lettino/a/parete/natural/paradise/dahlia/8/800/67124_np_wandliegebett_1000x1000_logo_la_dsc0187_8.jpg');

//var_dump($crocchette);
//var_dump($osso);
//var_dump($lettinoDaParete);

$products = [
    new Food('Manzo', '2kg', 'manzo (31,3%, di cui 26% manzo fresco, 5,3% manzo essiccato), mais, pollo essiccato (16,5%), riso,
    farina di riso integrale, proteine animali idrolizzate, grasso di pollo, olio di salmone (fonte naturale di Omega 3), minerali, mannano-oligosaccaridi (0,1%), inulina derivante dalla cicoria [fonte di FOS] (0,1%).', 'Secco', 'Almo Nature Holistic con Manzo Fresco', '11.99 €', new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/con/manzo/fresco/6/800/68102_pla_almonature_rind_reis_2kg_6.jpg'),

    new Toy('s', 'Nylabone Dura Chew Chicken Osso gioco', '7.90 €', new Category('dog'), 'https://shop-cdn-m.mediazs.com/bilder/nylabone/dura/chew/chicken/osso/gioco/2/800/58927_pla_interpet_nylabone_durachewchicken_hs_01_2.jpg'),

    new PetHouse('L 48 x P 42 x H 24 cm', 'Polyester, wood', 'Lettino a parete Natural Paradise Dahlia', '29.49 €', new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/lettino/a/parete/natural/paradise/dahlia/8/800/67124_np_wandliegebett_1000x1000_logo_la_dsc0187_8.jpg')
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="row row-cols-3">
                <div class="col">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">name</h5>
                            <h6 class="card-title">price</h6>
                            <div class="card-text">
                                <p>product type </p>
                                <span>category</span>
                            </div>
                            <a href="#" class="btn btn-primary">Add Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>


</body>

</html>