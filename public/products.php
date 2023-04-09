<?php

require_once __DIR__ . '/../config/twig.php';


$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('products.html.twig',['products' => $products]);





