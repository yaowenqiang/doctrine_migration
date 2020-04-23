<?php
/**
 *
 * Created by PhpStorm.
 * User: jacky.yao
 * Date: 2020/4/21
 * Time: 10:29
 */

require_once 'bootstrap.php';

$newProductName = $argv[1];
$product = new Product();
$product->setName($newProductName);
$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
