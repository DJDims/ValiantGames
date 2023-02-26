<?php
	session_start();

	date_default_timezone_set('Europe/Tallinn');

	include_once 'database.php';
	
	//Controllers
	include_once 'Controller/MainController.php';
	include_once 'Controller/BundleController.php';
	include_once 'Controller/CategoryController.php';
	include_once 'Controller/CompanyController.php';
	include_once 'Controller/GameController.php';
	include_once 'Controller/UserController.php';
	
	//Models
	include_once 'Model/MainModel.php';
	include_once 'Model/BundleModel.php';
	include_once 'Model/CategoryModel.php';
	include_once 'Model/CompanyModel.php';
	include_once 'Model/GameModel.php';
	include_once 'Model/UserModel.php';
	
	include_once 'Route/Route.php';
?>