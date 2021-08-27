<?php

require_once __DIR__ . '/lib/autoloader.php';

$task = new Task('TITLE', 'DESC', '5', 'Im the class Task');
$product = new Product('Im the class Product');

if (isset($task) && isset($product)) {
    $hello = $task->sayTask();
    $product_salutation = $product->sayProduct();

    var_dump($hellproducto);
    var_dump($product_salutation);
}
