<?php

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

require '../vendor/autoload.php';

//Rendu du template
$loader = new \Twig\Loader\FilesystemLoader('../src/View');
$twig = new \Twig\Environment($loader, ['cache' => False]);

echo $twig->render('index.html.twig', ["products" => $products]);



