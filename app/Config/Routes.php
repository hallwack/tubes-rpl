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
$routes->get('/books/add', 'PageController::add');
$routes->get('/books/clear', 'PageController::clearCart');

$routes->group('admin', function ($routes) {
	$routes->group('books', function ($routes) {
		$routes->get('index', 'BooksController::index');
		$routes->get('add', 'BooksController::add');
		$routes->get('edit', 'BooksController::edit');
	});
	$routes->group('categories', function ($routes) {
		$routes->get('index', 'BookCategoriesController::index');
		$routes->get('create', 'BookCategoriesController::create');
		$routes->post('save', 'BookCategoriesController::save');
		$routes->get('edit/(:num)', 'BookCategoriesController::edit/$1');
		$routes->post('update/(:num)', 'BookCategoriesController::update/$1');
		$routes->post('delete/(:num)', 'BookCategoriesController::delete/$1');
	});
	$routes->group('transactions', function ($routes) {
		$routes->get('index', 'TransactionsController::index');
		$routes->get('add', 'TransactionsController::add');
		$routes->get('edit', 'TransactionsController::edit');
	});
	$routes->group('type-of-payments', function ($routes) { //TODO: Belum bisa
		$routes->get('index', 'TypeOfPaymentsController::index'); //TODO: Belum bisa
		$routes->get('create', 'TypeOfPaymentsController::create');
		$routes->post('save', 'TypeOfPaymentsController::save');
		$routes->get('edit', 'TypeOfPaymentsController::edit');
		$routes->post('update/(:num)', 'TypeOfPaymentsController::update/$1'); //TODO: Belum bisa
		$routes->post('delete/(:num)', 'TypeOfPaymentsController::delete/$1'); //TODO: Belum bisa
	});
	$routes->group('users', function ($routes) {
		$routes->get('index', 'UsersController::index');
		$routes->get('create', 'UsersController::create');
		$routes->post('save', 'UsersController::save');
		$routes->get('edit/(:num)', 'UsersController::edit/$1');
		$routes->post('update/(:num)', 'UsersController::update/$1');
		$routes->post('delete/(:num)', 'UsersController::delete/$1');
	});
});

$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');

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
