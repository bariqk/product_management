$routes->get('/products', 'ProductController::index');
$routes->get('/products/create', 'ProductController::create');
$routes->post('/products/store', 'ProductController::store');
$routes->get('/products/edit/(:num)', 'ProductController::edit/$1');
$routes->post('/products/update/(:num)', 'ProductController::update/$1');
$routes->get('/products/delete/(:num)', 'ProductController::delete/$1');
$routes->post('/products/add-property/(:num)', 'ProductController::addProperty/$1');
$routes->get('/products/delete-property/(:num)', 'ProductController::deleteProperty/$1');