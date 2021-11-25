<?php 

//composer run-script run 

use Router\Router;
use App\Exceptions\NotFoundException;
// $url="index";
//http://localhost:8001/index.php?url=  homepage 
//http://localhost:8001/index.php?url=/posts/2  post n°2


require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);
define('SCRIPTS',dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR);
define('DB_NAME','myapp');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','');

$router = new Router($_GET['url'] ?? '/');

$router->get('/', 'App\Controllers\BlogController@welcome');
$router->get('/posts', 'App\Controllers\BlogController@index');
$router->get('/posts/:id','App\Controllers\BlogController@show');
$router->get('/tags/:id','App\Controllers\BlogController@tag');

$router->get('/admin/posts','App\Controllers\Admin\PostController@index');
$router->post('/admin/posts/delete/:id','App\Controllers\Admin\PostController@destroy');

$router->get('/admin/posts/create','App\Controllers\Admin\PostController@create');
$router->post('/admin/posts/create','App\Controllers\Admin\PostController@createPost');

$router->get('/admin/posts/edit/:id','App\Controllers\Admin\PostController@edit');
$router->post('/admin/posts/edit/:id','App\Controllers\Admin\PostController@update');

$router->get('/login', 'App\Controllers\UserController@login');
$router->post('/login', 'App\Controllers\UserController@loginPost');
$router->get('/logout', 'App\Controllers\UserController@logout');



try {
$router->run();
} catch (NotFoundException $e){
    return $e->error404();
}