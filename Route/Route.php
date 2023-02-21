<?php

$host = explode('?', $_SERVER['REQUEST_URI']);

$path = $host[0];
$num = substr_count($path, '/');
$route = explode('/', $path)[$num];

if(strstr($_SERVER['REQUEST_URI'],'?')){
	$id=urldecode($host[1]);
}

if ($route == '' OR $route == 'index.php') {
	
}

switch($route){
	case '':
	case 'index.php':
		MainController::StartSite();
		break;

	case 'showAddCategory':
		CompanyController::showAddCompany();
		break;
}

?>