<?php

  namespace Config;

  // Create a new instance of our RouteCollection class.
  use App\Controllers\Subcategories;

  $routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
  if ( file_exists(SYSTEMPATH . 'Config/Routes.php') ) {
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
  $routes->group('auth', function ($routes) {
    $routes->get('/', 'Auth::index');
    $routes->get('login', 'Auth::login');
    $routes->get('register', 'Auth::register');
    $routes->get('register_two', 'Auth::register_two');
    $routes->get('logout', 'Auth::logout');
    $routes->post('processLogin', 'Auth::processLogin');
    $routes->post('processRegistration', 'Auth::processRegistration');
  });

  $routes->group('catalogue', function ($routes) {
    $routes->get('/', 'Catalogue::index');
    $routes->get('categorycatalogue/(:any)', 'Catalogue::categorycatalogue/$1');
    $routes->get('subcategorycatalogue/(:any)', 'Catalogue::subcategorycatalogue/$1');
  });

  $routes->get('orderhistory', 'Sale::orderhistory');
  $routes->get('emptyorderhistory', 'Sale::emptyorderhistory');

  $routes->get('categorylist', 'Catalogue::categorylist');

  $routes->post('vehicle', 'Cart::vehicle');
  $routes->get('vehicle/(:any)', 'Cart::vehicleTopProduct/$1');

  $routes->post('addtocart', 'Cart::addToCart');

  $routes->post('editcart', 'Cart::editCart');

  $routes->post('editquantity', 'Cart::editQuantity');

  $routes->get('removeitem', 'Cart::removeItem');

  $routes->get('checkout', 'Sale::checkout');

  $routes->get('purchase/(:any)', 'Sale::purchase/$1');

  /*
   * ------------------------------------
   * Image CRUD for Admin
   * -----------------------------------
   * */
  $routes->group('admin', function ($routes) {
    //route for admin
    $routes->get('/', 'Dashboard::index');
    $routes->get('dashboard', 'Dashboard::index');
    // routes for vehicles CRUD
    $routes->get('vehicles/read', 'Vehicle::index');
    $routes->get('vehicles/create', 'Vehicle::create');
    $routes->post('vehicles/store', 'Vehicle::store');
    $routes->get('vehicles/edit/(:num)','Vehicle::edit/$1');
    $routes->put('vehicles/update/(:num)', 'Vehicle::update/$1' );
    $routes->get('vehicles/delete/(:num)', 'Vehicle::delete/$1' );
    // routes for categories CRUD
    $routes->get('categories/read', 'Categories::index');
    $routes->get('categories/create', 'Categories::create');
    $routes->post('categories/store', 'Categories::store');
    $routes->get('categories/edit/(:num)','Categories::edit/$1');
    $routes->put('categories/update/(:num)', 'Categories::update/$1' );
    $routes->get('categories/delete/(:num)', 'Categories::delete/$1' );
    // routes for subcategories CRUD
    $routes->get('subcategories/read', 'Subcategories::index');
    $routes->get('subcategories/create', 'Subcategories::create');
    $routes->post('subcategories/store', 'Subcategories::store');
    $routes->get('subcategories/edit/(:num)', 'Subcategories::edit/$1');
    $routes->put('subcategories/update/(:num)', 'Subcategories::update/$1');
    $routes->get('subcategories/delete/(:num)', 'Subcategories::delete/$1');
    // routes for users CRUD
    $routes->get('users/read', 'Users::index');
    $routes->get('users/create', 'Users::create');
    $routes->post('users/store', 'Users::store');
    $routes->get('users/edit/(:num)', 'Users::edit/$1');
    $routes->put('users/update/(:num)', 'Users::update/$1');
    $routes->get('users/delete/(:num)', 'Users::delete/$1');

  });


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
  if ( file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php') ) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
  }
