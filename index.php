<!-- 

Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).

-->
<?php
    require_once __DIR__ . '/classes/Bed.php';
    require_once __DIR__ . '/classes/Card.php';
    require_once __DIR__ . '/classes/Food.php';
    require_once __DIR__ . '/classes/Game.php';
    require_once __DIR__ . '/classes/User.php';

    $ceasar = new Food('ceaser', 2.99, '24/09/22',['chicken', 'vegetables']);
    $card1 = new Card('2025-12-20', 234, '054', 'Gino Pino');
    $bedsPuppy = new Bed('KingPuppy', 45, 'Silk','100x100cm');
    $chickenTrumpet = new Game('Chicken Trumpet', 20.99, 'Plastic', '20x5cm', true);
    $ginoPino = new User('Gino Pino', 'ginopino@gmail.com', true, null);

    $discount = 0;
    
    if(!$card1->checkValidationCard()){
        echo 'Carta scaduta';
    }
    
    if($ginoPino->getRegistered()){
        $discount = 0.2;
    }

    $ginoPino->addToCart($chickenTrumpet);
    
    if($discount != 0){
      $finalPrice = round($ginoPino->getsum() - ($ginoPino->getsum() * $discount), 2);
    }
    else{
        $finalPrice = $ginoPino->getSum();   
    }
    var_dump($finalPrice)
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<!-- 

    Product
    
    Food
    Game
    Bed 

    User

    Card

    Trait:
    Seasonal
-->