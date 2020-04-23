<?php
/**
 *
 * Created by PhpStorm.
 * User: jacky.yao
 * Date: 2020/4/21
 * Time: 11:39
 */

require_once 'bootstrap.php';

$newUserName = $argv[1];
$user =  new User();
$user->setName($newUserName);
$entityManager->persist($user);
$entityManager->flush();
echo "created User with ID: " . $user->getId() . "\n";