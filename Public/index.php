<?php
require __DIR__ . '/../vendor/autoload.php';

use Reschit\App\Core\{App, Route};

/** Loading dotenv. */
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__));
$dotenv->load();

$dir = dirname(__DIR__);

/** Database */
$config = [
    'host' => 'localhost',
    'driver' => 'mysql',
    'database' => getenv('dbname'),
    'username' => getenv('dbuser'),
    'password' => getenv('dbpassword'),
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix' => ''
];

$db = new \Buki\Pdox($config);

/** Loading route rules. */
require_once dirname(__DIR__) . '/App/Routes/Web.php';
Route::prefix('/api')->group(function () {
    require_once dirname(__DIR__) . '/App/Routes/Api.php';
});


Route::dispatch();
?>