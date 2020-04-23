<?php
/**
 *
 * Created by PhpStorm.
 * User: jacky.yao
 * Date: 2020/4/21
 * Time: 10:52
 */

require_once 'bootstrap.php';
$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();
foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}