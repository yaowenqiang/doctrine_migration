<?php
/**
 *
 * Created by PhpStorm.
 * User: jacky.yao
 * Date: 2020/4/20
 * Time: 22:25
 */
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
require_once "vendor/autoload.php";


$isDevMOde = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/src'), $isDevMOde, $proxyDir, $cache, $useSimpleAnnotationReader);
$conn = [
    'driver' => 'pdo_sqlite',
    'path' => 'db.sqlite'
];

$entityManager = EntityManager::create($conn, $config);
