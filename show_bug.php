<?php
/**
 *
 * Created by PhpStorm.
 * User: jacky.yao
 * Date: 2020/4/21
 * Time: 13:55
 */

require_once 'bootstrap.php';

$bugId = $argv[1];

/**
 * @var Bug $bug
 */
$bug = $entityManager->find('Bug', (int)$bugId);
echo "Bug: ".$bug->getDescription()."\n";
echo "Engineer: ".$bug->getEngineer()->getName()."\n";


//Doctrine\Common\Util\Debug::dump($bug->getEngineer());
$engineer = $bug->getEngineer();
//var_dump($engineer);