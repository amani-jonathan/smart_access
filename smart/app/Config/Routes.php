<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
*/

//APPS SCANNER
$routes->get('/', 'Main::index');
$routes->post('scanner_check', 'Main::checking');

//BACKEND
$routes->get("admin", "Login::index");
$routes->match(["get", "post"], "connexion", "Login::login");
$routes->get("deconnexion", "Login::logout");
$routes->get('dashboard', 'Admin::index',  ["filter" => "auth"]);
$routes->get('gate_validation/(:any)', 'Main::gate_validation/$1');

$routes->get('liste_service', 'Admin::service_list',  ["filter" => "auth"]);
$routes->post('add_service', 'Admin::add_service',  ["filter" => "auth"]);
$routes->get('edit_service/(:any)', 'Admin::getServiceId/$1',  ["filter" => "auth"]);
$routes->get('delete_service/(:any)', 'Admin::deleteServiceId/$1');

$routes->get('liste_type', 'Admin::type_list',  ["filter" => "auth"]);
$routes->post('add_type', 'Admin::add_type',  ["filter" => "auth"]);
$routes->get('edit_type/(:any)', 'Admin::getTypeId/$1',  ["filter" => "auth"]);
$routes->get('delete_type/(:any)', 'Admin::deleteTypeId/$1');

$routes->get('liste_param', 'Admin::param_list',  ["filter" => "auth"]);
$routes->get('add_param/(:any)/(:any)', 'Admin::update_params/$1/$2');
$routes->post('add_param2', 'Admin::update_params2');
$routes->get('edit_param/(:any)', 'Admin::getParamId/$1',  ["filter" => "auth"]);
$routes->get('delete_param/(:any)', 'Admin::deleteParamId/$1');

$routes->get('liste_demande_new', 'Admin::new_demande',  ["filter" => "auth"]);
// $routes->post('add_type', 'Admin::add_type',  ["filter" => "auth"]);
$routes->get('edit_demande/(:any)', 'Admin::getDemandeId/$1',  ["filter" => "auth"]);
$routes->get('delete_damande/(:any)', 'Admin::deleteDemandeId/$1');


$routes->get('inscription', 'Login::inscription');
$routes->post('save_rdv', 'Login::save_rdv');
$routes->get('notif/(:any)', 'Login::notif/$1');

$routes->post('submit-form', 'Login::store');
// $routes->post('submit-form', 'Login::store');
$routes->get('accueil', 'Login::dashboard');
$routes->get('qrcodes', 'Login::validation');
$routes->get('qrcode', 'Login::check_qrcode');
 























// $routes->get('calendrier', 'Admin::calendar');
// $routes->get('charts', 'Admin::charts');
// $routes->get('charts-google', 'Admin::charts_google');
// $routes->get('charts-knob', 'Admin::charts_knob');
// $routes->get('charts-morris', 'Admin::charts_morris');
// $routes->get('charts-sparkline', 'Admin::charts_sparkline');
// $routes->get('forms-elements', 'Admin::forms_elements');
// $routes->get('forms-mask', 'Admin::forms_mask');
// $routes->get('forms-plugins', 'Admin::forms_plugins');
// $routes->get('forms-quilljs', 'Admin::forms_quilljs');
// $routes->get('forms-uploads', 'Admin::forms_uploads');
// $routes->get('forms-validation', 'Admin::forms_validations');





