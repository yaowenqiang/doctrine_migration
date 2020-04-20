<?php
/**
 *
 * Created by PhpStorm.
 * User: jacky.yao
 * Date: 2020/4/20
 * Time: 22:34
 */

require_once 'bootstrap.php';


return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
