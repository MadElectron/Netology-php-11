<?php

require_once 'Autoloader.php';

use \Base\Cart as Cart;
use \Base\Order as Order;
use \ProductTypes\Food as Food;
use \ProductTypes\MusicAlbum as MusicAlbum;
use \ProductTypes\Pencil as Pencil;


// ==== Main code ====

$whiskey = new Food('Whiskey', 4000, 2, 10);

// echo $whiskey->getTitle();
// echo $whiskey->getPrice().PHP_EOL;
// echo $whiskey->getDeliveryPrice().PHP_EOL;

$potatoes = new Food('Potatoes', 450, 15, 20);
// echo $potatoes->getPrice().PHP_EOL;

$tracks = ['Cowboys from Hell', 'Primal Concrete Sledge','Domination', 'Cemetery Gates'];
$cowboysFromHell = new MusicAlbum('Cowboys from Hell', 'Pantera', '48:00', $tracks, 500);
// echo $cowboysFromHell->getPrice().PHP_EOL;

$yellowPencil = new Pencil('Standard boring yellow pencil', 20, [255, 255, 0]);
$pricelessPencil = new Pencil('Priceless silver pencil', 0, [240, 240, 240]);
// echo $yellowPencil->getPrice().PHP_EOL;

$cart = new Cart();

$cart->add($potatoes);
$cart->add($whiskey);
$cart->add($cowboysFromHell);
$cart->add($yellowPencil);
$cart->add($pricelessPencil);

// echo $cart->getTotal().PHP_EOL;
// echo nl2br($cart);

$cart->remove(10);

// $cart->remove(0);
// echo nl2br($cart);

$ord = new Order($cart);
// echo $ord->getId().PHP_EOL;

echo nl2br($ord).PHP_EOL;
$ord->setStatus(3);
$ord->setStatus(1);
