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

	case 'showBuyGame':
		UserController::showBuyGame($id);
		break;
	
	case 'buyGame':
		UserController::buyGame($id);
		break;
	
	case 'wishGame':
		UserController::wishGame($id);
		break;
	
	case 'unwishGame':
		UserController::unwishGame($id);
		break;
//---------------users---------------
//---------------companies---------------
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
//---------------companies---------------
//---------------categories---------------
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
//---------------categories---------------
//---------------games---------------
	case 'showTableGames':
		GameController::showTableGames();
		break;

	case 'showAddGame':
		GameController::showAddGame();
		break;

	case 'addGame':
		GameController::addGame();
		break;

	case 'showEditGame':
		GameController::showEditGame($id);
		break;

	case 'editGame':
		GameController::editGame($id);
		break;

	case 'showDeleteGame':
		GameController::showDeleteGame($id);
		break;

	case 'deleteGame':
		GameController::deleteGame($id);
		break;

	case 'showDetails':
		GameController::showDetails($id);
		break;
//---------------games---------------
//---------------bundles---------------
	case 'showTableBundles':
		BundleController::showTableBundles();
		break;

	case 'showAddBundle':
		BundleController::showAddBundle();
		break;

	case 'addBundle':
		BundleController::addBundle();
		break;

	case 'showEditBundle':
		BundleController::showEditBundle($id);
		break;

	case 'editBundle':
		BundleController::editBundle($id);
		break;

	case 'showDeleteBundle':
		BundleController::showDeleteBundle($id);
		break;

	case 'deleteBundle':
		BundleController::deleteBundle($id);
		break;
//---------------bundles---------------
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