<?php

$host = explode('?', $_SERVER['REQUEST_URI']);

$path = $host[0];
$num = substr_count($path, '/');
$route = explode('/', $path)[$num];

if(strstr($_SERVER['REQUEST_URI'],'?')){
	$id = urldecode($host[1]);
}

switch($route){
	case '':
	case 'index.php':
		MainController::StartSite();
		break;

	case 'showAddCategory':
		CompanyController::showAddCompany();
		break;
		
	case 'showLogin':
		UserController::showLoginForm();
		break;

	case 'login':
		UserController::login();
		break;

	case 'showRegister':
		UserController::showRegisterForm();
		break;

	case 'register':
		UserController::register();
		break;

	case 'profile':
		UserController::showProfile($id);
		break;

	case 'showTableCompanies':
		CompanyController::showTableCompanies();
		break;
		
	case 'showAddCompany':
		CompanyController::showAddCompany();
		break;

	case 'addCompany':
		CompanyController::addCompany();
		break;

	case 'showEditCompany':
		CompanyController::showEditCompany($id);
		break;

	case 'editCompany':
		CompanyController::editCompany($id);
		break;

	case 'showDeleteCompany':
		CompanyController::showDeleteCompany($id);
		break;

	case 'deleteCompany':
		CompanyController::deleteCompany($id);
		break;

	case 'showTableCategories':
		CategoryController::showTableCategories();
		break;

	case 'showAddCategory':
		CategoryController::showAddCategory();
		break;

	case 'addCategory':
		CategoryController::addCategory();
		break;

	case 'showEditCategory':
		CategoryController::showEditCategory($id);
		break;

	case 'editCategory':
		CategoryController::editCategory($id);
		break;

	case 'showDeleteCategory':
		CategoryController::showDeleteCategory($id);
		break;

	case 'deleteCategory':
		CategoryController::deleteCategory($id);
		break;

	// case 'editCompany':
	// 	CompanyController::
	// 	break;

//DEVELOPER ROUTES
	case 'dropSession':
		session_destroy();
		break;
	
//DEVELOPER ROUTES
	default :
		MainController::error404();
		break;

}

?>