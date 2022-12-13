<?php
require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Categories.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Toys.php';
require_once __DIR__ . '/../Models/PetHouse.php';
require_once __DIR__ . '/../Models/Customer.php';
require_once __DIR__ . '/../Models/CreditCard.php';
require_once __DIR__ . '/../Models/Cart.php';

// $crocchette = new Food('Manzo', '2kg', 'manzo (31,3%, di cui 26% manzo fresco, 5,3% manzo essiccato), mais, pollo essiccato (16,5%), riso,
// farina di riso integrale, proteine animali idrolizzate, grasso di pollo, olio di salmone (fonte naturale di Omega 3), minerali, mannano-oligosaccaridi (0,1%), inulina derivante dalla cicoria [fonte di FOS] (0,1%).', 'Secco', 'Almo Nature Holistic con Manzo Fresco', '11.99 €', new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/con/manzo/fresco/6/800/68102_pla_almonature_rind_reis_2kg_6.jpg');

// $osso = new Toy('s', 'Nylabone Dura Chew Chicken Osso gioco', '7.90 €', new Category('dog'), 'https://shop-cdn-m.mediazs.com/bilder/nylabone/dura/chew/chicken/osso/gioco/2/800/58927_pla_interpet_nylabone_durachewchicken_hs_01_2.jpg');

// $lettinoDaParete = new PetHouse('L 48 x P 42 x H 24 cm', 'Polyester, wood', 'Lettino a parete Natural Paradise Dahlia', '29.49 €', new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/lettino/a/parete/natural/paradise/dahlia/8/800/67124_np_wandliegebett_1000x1000_logo_la_dsc0187_8.jpg');

//var_dump($crocchette);
//var_dump($osso);
//var_dump($lettinoDaParete);

$products = [
    new Food('Manzo', '2kg', 'manzo (31,3%, di cui 26% manzo fresco, 5,3% manzo essiccato), mais, pollo essiccato (16,5%), riso,
    farina di riso integrale, proteine animali idrolizzate, grasso di pollo, olio di salmone (fonte naturale di Omega 3), minerali, mannano-oligosaccaridi (0,1%), inulina derivante dalla cicoria [fonte di FOS] (0,1%).', 'Secco', 'Almo Nature Holistic con Manzo Fresco', 11.99, new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/con/manzo/fresco/6/800/68102_pla_almonature_rind_reis_2kg_6.jpg'),

    new Toy('s', 'Nylabone Dura Chew Chicken Osso gioco', 7.90, new Category('dog'), 'https://shop-cdn-m.mediazs.com/bilder/nylabone/dura/chew/chicken/osso/gioco/2/800/58927_pla_interpet_nylabone_durachewchicken_hs_01_2.jpg'),

    new PetHouse('L 48 x P 42 x H 24 cm', 'Polyester, wood', 'Lettino a parete Natural Paradise Dahlia', 29.49, new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/lettino/a/parete/natural/paradise/dahlia/8/800/67124_np_wandliegebett_1000x1000_logo_la_dsc0187_8.jpg'),

    new Food('Tonno e Merluzzo', '280g', 'Tonno Skipjack (29,5%), merluzzo (27,5%), riso (3%).
    ', 'Umido', 'Almo Nature HFC 6 x 280 g / 290 g', 15.49, new Category('dog'), 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/hfc/x/g/g/7/800/184097_pla_almonature_hfc_thunfisch_kabelhau_290g_hs_01_7.jpg'),

    new Toy(' L 15 x P 15 x H 23 cm', 'Base con giochi Wild Mouse con sonoro e LED', 5.99, new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/base/con/giochi/wild/mouse/con/sonoro/e/led/6/800/67335_pla_sincerepet_katzenspielbrett_wild_mouse_fg_7669_6.jpg'),

    new PetHouse('L 66 x P 81 x H 88 cm', 'Pvc, wood', 'Cuccia per cani Modern Living Palma', 148.99, new Category('dog'), 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/modern/living/palma/4/800/112108_pla_modern_living_hundeh_tte_palma_fg_1296_4.jpg'),

    new Food('Manzo', '2kg', 'manzo (31,3%, di cui 26% manzo fresco, 5,3% manzo essiccato), mais, pollo essiccato (16,5%), riso,
    farina di riso integrale, proteine animali idrolizzate, grasso di pollo, olio di salmone (fonte naturale di Omega 3), minerali, mannano-oligosaccaridi (0,1%), inulina derivante dalla cicoria [fonte di FOS] (0,1%).', 'Secco', 'Almo Nature Holistic con Manzo Fresco', 11.99, new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/con/manzo/fresco/6/800/68102_pla_almonature_rind_reis_2kg_6.jpg'),

    new Toy('s', 'Nylabone Dura Chew Chicken Osso gioco', 7.90, new Category('dog'), 'https://shop-cdn-m.mediazs.com/bilder/nylabone/dura/chew/chicken/osso/gioco/2/800/58927_pla_interpet_nylabone_durachewchicken_hs_01_2.jpg')
];

$guest = new Customer('Paolo', 'paolo@rossi.it', 'via Milano, 12',);
//var_dump($guest);
$guestCart = new Cart($guest);
//var_dump($guestCart);
$guestCart->addProduct(new Food('Manzo', '2kg', 'manzo (31,3%, di cui 26% manzo fresco, 5,3% manzo essiccato), mais, pollo essiccato (16,5%), riso,
farina di riso integrale, proteine animali idrolizzate, grasso di pollo, olio di salmone (fonte naturale di Omega 3), minerali, mannano-oligosaccaridi (0,1%), inulina derivante dalla cicoria [fonte di FOS] (0,1%).', 'Secco', 'Almo Nature Holistic con Manzo Fresco', 11.99, new Category('cat'), 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/con/manzo/fresco/6/800/68102_pla_almonature_rind_reis_2kg_6.jpg'), 2);
$guestCart->addProduct(new Toy('s', 'Nylabone Dura Chew Chicken Osso gioco', 7.90, new Category('dog'), 'https://shop-cdn-m.mediazs.com/bilder/nylabone/dura/chew/chicken/osso/gioco/2/800/58927_pla_interpet_nylabone_durachewchicken_hs_01_2.jpg'), 4);

$cartProducts = $guestCart->getProducts();
//var_dump($cartProducts);
$guestCartAmount = $guestCart->getTotal();
//var_dump($GuestCartAmount)
$guest->insertCreditCard(new CreditCard('987 654 321 1234', '987', 9, 2022));

try {
    $paymentMessage = $guest->makePayment($totalAmount);
    //echo $paymentMessage;
} catch (Exception $e) {
    //echo $e->getMessage();
}
