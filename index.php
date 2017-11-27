<?php

require_once 'Autoloader.php';

use \ProductTypes\Food as Food;
use \ProductTypes\MusicAlbum as MusicAlbum;
use \ProductTypes\Pencil as Pencil;

// ==== Main code ====

$whiskey = new Food('Whiskey', 4000, 2, 10);

echo $whiskey->getPrice().PHP_EOL;
echo $whiskey->getDeliveryPrice().PHP_EOL;

$potatoes = new Food('Potatoes', 450, 15, 20);
echo $potatoes->getPrice().PHP_EOL;

$tracks = ['Cowboys from Hell', 'Primal Concrete Sledge','Domination', 'Cemetery Gates'];
$cowboysFromHell = new MusicAlbum('Cowboys from Hell', 'Pantera', '48:00', $tracks, 500);
echo $cowboysFromHell->getPrice().PHP_EOL;

$yellowPencil = new Pencil('Standard boring yellow pencil', 20, [255, 255, 0]);
echo $yellowPencil->getPrice().PHP_EOL;