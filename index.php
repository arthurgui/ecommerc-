<?php 

require_once("vendor/autoload.php");

use \Hcode\Page;
use \Hcode\PageAdmin;



$app = new \Slim\Slim();

$app->config('debug', true);

//portal
$app->get('/', function() {
    
	$page = new Hcode\Page();

	$page->setTpl("index");

});

//admin
$app->get('/admin', function() {
    
	$page = new PageAdmin();

	$page->setTpl("index");

});

$app->run();

 ?>