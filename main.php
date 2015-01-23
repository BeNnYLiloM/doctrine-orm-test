<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$path = array(__DIR__."/src");
$isDevMode = true;

$dbParams = array(
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => 'root',
    'dbname' => 'doctrine-orm',
);

$config = Setup::createAnnotationMetadataConfiguration($path, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);


