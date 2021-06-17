<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'PageController::index');
$routes->get('/books/check', 'PageController::check');
$routes->post('/books/add', 'PageController::add');
$routes->get('/books/load', 'PageController::load');
$routes->post('/books/clear', 'PageController::clear');
$routes->post('/books/clearAll', 'PageController::clearAll');
$routes->post('/proses', 'PageController::process');

$routes->group('admin', function ($routes) {

	$routes->get('/', 'AdminController::index');

	$routes->group('books', function ($routes) {
		$routes->get('/', 'BooksController::index');
		$routes->get('create', 'BooksController::create');
		$routes->post('save', 'BooksController::save');
		$routes->get('edit/(:num)', 'BooksController::edit/$1');
		$routes->post('update/(:num)', 'BooksController::update/$1');
		$routes->post('delete', 'BooksController::delete');
	});
	$routes->group('categories', function ($routes) {
		$routes->get('/', 'BookCategoriesController::index');
		$routes->get('create', 'BookCategoriesController::create');
		$routes->post('save', 'BookCategoriesController::save');
		$routes->get('edit/(:num)', 'BookCategoriesController::edit/$1');
		$routes->post('update/(:num)', 'BookCategoriesController::update/$1');
		$routes->post('delete', 'BookCategoriesController::delete');
	});
	$routes->group('transactions', function ($routes) {
		$routes->get('/', 'TransactionsController::index');
		$routes->get('show/(:num)', 'TransactionsController::show/$1');
		$routes->get('edit', 'TransactionsController::edit');
	});
	$routes->group('type-of-payments', function ($routes) {
		$routes->get('/', 'TypeOfPaymentsController::index');
		$routes->get('create', 'TypeOfPaymentsController::create');
		$routes->post('save', 'TypeOfPaymentsController::save');
		$routes->get('edit/(:num)', 'TypeOfPaymentsController::edit/$1');
		$routes->post('update/(:num)', 'TypeOfPaymentsController::update/$1');
		$routes->post('delete', 'TypeOfPaymentsController::delete');
	});
	$routes->group('users', function ($routes) {
		$routes->get('/', 'UsersController::index');
		$routes->get('create', 'UsersController::create');
		$routes->post('save', 'UsersController::save');
		$routes->get('edit/(:num)', 'UsersController::edit/$1');
		$routes->post('update/(:num)', 'UsersController::update/$1');
		$routes->post('delete', 'UsersController::delete');
	});
});

$routes->get('/login', 'AuthController::login');
$routes->post('/loginForm', 'AuthController::loginForm');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/register', 'AuthController::register');
$routes->post('/registerForm', 'AuthController::registerForm');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
