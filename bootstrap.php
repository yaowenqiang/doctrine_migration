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
$cache = new \Doctrine\Common\Cache\ApcuCache();
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . '/src'), $isDevMOde, $proxyDir, $cache, $useSimpleAnnotationReader);
$config->setMetadataCacheImpl($cache);
$config->setProxyNamespace('myproxy');
$config->setProxyDir('src/proxy');
//$config->setAutoGenerateProxyClasses(true);
$config->setMetadataCacheImpl($cache);
$config->getMetadataCacheImpl();
$config->setQueryCacheImpl($cache);
$config->getQueryCacheImpl();
$config->setResultCacheImpl($cache);


$conn = [
    'driver' => 'pdo_sqlite',
    'path' => 'db.sqlite'
];

$entityManager = EntityManager::create($conn, $config);
