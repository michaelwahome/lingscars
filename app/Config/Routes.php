<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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
$routes->get('/', 'Home::index');
$routes->group('auth', function($routes){
    $routes->get('/', 'Auth::index');
    $routes->get('login', 'Auth::login');
    $routes->get('register', 'Auth::register');
    $routes->get('register_two', 'Auth::register_two');
    $routes->get('logout', 'Auth::logout');
});
$routes->get('catalogue', 'Catalogue::overall');
$routes->get('/cart', 'cart::index');

$routes->get('/suv_catalogue', 'Catalogue::suv');
$routes->get('/bike_catalogue', 'Catalogue::bike');
$routes->get('/sedan_catalogue', 'Catalogue::sedan');
$routes->get('/overall_catalogue', 'Catalogue::overall');

$routes->get('/maintemplate', 'Home::maintemplate');


/*
 * ------------------------------------
 * Image CRUD for Admin
 * -----------------------------------
 * */

  $routes->get('admin/products', 'ProductController::index');
$routes->get('admin/products/create', 'ProductController::create');
$routes->post('admin/products/store', 'ProductController::store');

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
