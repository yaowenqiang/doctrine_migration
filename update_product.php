<?php
/**
 *
 * Created by PhpStorm.
 * User: jacky.yao
 * Date: 2020/4/21
 * Time: 10:57
 */

require_once 'bootstrap.php';

$id = $argv[1];
$newName = $argv[2];

$product = $entityManager->find('Product', $id);
if ($product == null) {
    echo "Product %id does not exists\n";
    exit(1);
}

$product->setName($newName);
$entityManager->flush();