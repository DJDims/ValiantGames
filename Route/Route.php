<?php

$host = explode('?', $_SERVER['REQUEST_URI']);

$path = $host[0];
$num = substr_count($path, '/');
$route = explode('/', $path)[$num];

if(strstr($_SERVER['REQUEST_URI'],'?')){
	$param = urldecode($host[1]);
}

switch($route){
	case '':
	case 'index':
	case 'index.php':
		MainController::StartSite();
		break;

	case 'search':
		MainController::search();
		break;

	case 'showAdvancedSearch':
		MainController::showAdvancedSearch();
		break;

	case 'advancedSearch':
		MainController::advancedSearch();
		break;
//---------------users---------------
	case 'showLogin':
		UserController::showLoginForm();
		break;

	case 'login':
		UserController::login();
		break;

	case 'logout':
		UserController::logout();
		break;

	case 'showRegister':
		UserController::showRegisterForm();
		break;

	case 'register':
		UserController::register();
		break;

	case 'profile':
		UserController::showProfile();
		break;

	case 'showTableUsers':
		UserController::showTableUsers();
		break;

	case 'addMoney':
		UserController::addMoney();
		break;
	
	case 'buyGame':
		UserController::buyGame($param);
		break;
	
	case 'wishGame':
		UserController::wishGame($param);
		break;
	
	case 'unwishGame':
		UserController::unwishGame($param);
		break;
	
	case 'showWishlist':
		UserController::showWishlist();
		break;
	
	case 'showLibrary':
		UserController::showLibrary();
		break;
	
	case 'changeRole':
		UserController::changeRole();
		break;
//---------------users---------------
//---------------companies---------------
	case 'showTableCompanies':
		CompanyController::showTableCompanies($param);
		break;
		
	case 'showAddCompany':
		CompanyController::showAddCompany();
		break;

	case 'addCompany':
		CompanyController::addCompany();
		break;

	case 'showEditCompany':
		CompanyController::showEditCompany($param);
		break;

	case 'editCompany':
		CompanyController::editCompany($param);
		break;

	case 'showDeleteCompany':
		CompanyController::showDeleteCompany($param);
		break;

	case 'deleteCompany':
		CompanyController::deleteCompany($param);
		break;

	case 'showCompanyDetails':
		CompanyController::showCompanyDetails($param);
		break;
//---------------companies---------------
//---------------categories---------------
	case 'showTableCategories':
		CategoryController::showTableCategories($param);
		break;

	case 'showAddCategory':
		CategoryController::showAddCategory();
		break;

	case 'addCategory':
		CategoryController::addCategory();
		break;

	case 'showEditCategory':
		CategoryController::showEditCategory($param);
		break;

	case 'editCategory':
		CategoryController::editCategory($param);
		break;

	case 'showDeleteCategory':
		CategoryController::showDeleteCategory($param);
		break;

	case 'deleteCategory':
		CategoryController::deleteCategory($param);
		break;

	case 'showCategoryDetails':
		CategoryController::showCategoryDetails($param);
		break;
//---------------categories---------------
//---------------games---------------
	case 'showTableGames':
		GameController::showTableGames($param);
		break;

	case 'showAddGame':
		GameController::showAddGame();
		break;

	case 'addGame':
		GameController::addGame();
		break;

	case 'showEditGame':
		GameController::showEditGame($param);
		break;

	case 'editGame':
		GameController::editGame($param);
		break;

	case 'showDeleteGame':
		GameController::showDeleteGame($param);
		break;

	case 'deleteGame':
		GameController::deleteGame($param);
		break;

	case 'showGameDetails':
		GameController::showGameDetails($param);
		break;
//---------------games---------------
	case 'error403':
		MainController::error403();
		break;
		
	case 'error404':
	default :
		MainController::error404();
		break;

}

?>