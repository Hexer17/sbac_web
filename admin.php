<?php

use \Slim\Slim;
use \SBAC\Page;
use \SBAC\Model\User;
use \SBAC\Model\Aluno;
use \SBAC\Model\Item;
use \SBAC\PageAdmin;




$app->get('/admin', function() {

	//print_r($_SESSION);exit;

	User::verifyLogin();
    
	$page2 = new PageAdmin();

	

	$page2->setTpl('index');

});

$app->get('/admin/login', function(){

	$page = new PageAdmin([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl('login');

});

$app->post('/admin/login', function(){

	//print_r($_POST);exit;

	User::login($_POST['login'],$_POST['password']);

	header("Location: /admin");
	exit;

});

$app->get('/admin/logout',function(){

	User::logout();
	
	header("Location: /admin/login");
	exit;

});