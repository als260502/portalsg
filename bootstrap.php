<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$paths = array("./Model/Entity");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'portal_sg',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

//funcao que carrega classes do modulo OBJOTA
function autoLoad($className)  
{  
    $className = ltrim($className, '\\'); 
    $fileName  = ''; 
    $namespace = ''; 
    if ($lastNsPos = strrpos($className, '\\')) { 
        $namespace = substr($className, 0, $lastNsPos); 
        $className = substr($className, $lastNsPos + 1); 
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR; 
        //var_dump($fileName);
    } 
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';  
  
    //var_dump($fileName);
    require $fileName;  
    
}
spl_autoload_register("autoLoad");