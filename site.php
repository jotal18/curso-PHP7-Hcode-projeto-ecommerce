<?php 

use \Hcode\Page;
use \Hcode\Model\User;
use \Hcode\Model\Product;

$app->get('/', function() {
    
	$page = new Page();
		
	$page->setTpl("index");

});




 ?>