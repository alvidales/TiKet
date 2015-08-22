<?php  
require __DIR__ . '/../vendor/autoload.php';  

use Illuminate\Database\Capsule\Manager as Capsule;  

$capsule = new Capsule; 

$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'TiKet',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
));

$capsule->bootEloquent();
