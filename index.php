<?php

require_once __DIR__ . '/vendor/autoload.php';



$purchasers = [
    'John Pablo',
    'Francisco Junior',
    'José Silva'
];

$book_php = new Johnpablo\DesignPatternsPhp\Prototype\BookPhpPrototype();
$book_php->setTitle('Padrões de projeto em PHP 7.4');

$books = [];
foreach($purchasers as $purchaser) {
    $purchaser_book = clone $book_php;
    $purchaser_book->setNameHolder($purchaser);
    $books[] = $purchaser_book;
}

print_r($books);