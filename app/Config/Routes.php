<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //FOR USER
 $routes->group('', ['filter' => 'authfilter'], function ($routes) {
$routes->get('/applydetails/(:num)', 'UserController::applydetails/$1');

 });
$routes->get('/', 'UserController::userhome');
$routes->get('usercontroller/myhome', 'UserController::myhome');
$routes->get('/category', 'UserController::getCategoryCounts');
$routes->get('/about', 'UserController::about');
$routes->get('/joblist', 'UserController::joblist');
$routes->get('/categorymar', 'UserController::categorymar');
$routes->get('/categorycus', 'UserController::categorycus');
$routes->get('/categoryhum', 'UserController::categoryhum');
$routes->get('/categorypro', 'UserController::categorypro');
$routes->get('/categorybus', 'UserController::categorybus');
$routes->get('/categorysal', 'UserController::categorysal');
$routes->get('/categorytea', 'UserController::categorytea');
$routes->get('/categorydes', 'UserController::categorydes');
$routes->get('/applicationstatus', 'UserController::applicationstatus');
$routes->get('/accountprofile', 'UserController::accountprofile');
$routes->get('/contact', 'UserController::contact');
$routes->get('/getdata', 'UserController::getdata');
$routes->post('/save', 'UserController::save');
$routes->post('/checkEmailUnique', 'UserController::checkEmailUnique');
$routes->post('/applynow', 'UserController::applynow');




//----User Login and Registration
$routes->match(['get', 'post'], '/log', 'UserController::log');
$routes->match(['get', 'post'], '/account_activation', 'UserController::account_activation');
$routes->match(['get', 'post'], 'account_activation/(:any)', 'UserController::account_activation/$1');
$routes->match(['get', 'post'], 'usercontroller/logout', 'UserController::logout');
$routes->match(['get', 'post'], '/reg', 'UserController::reg');
$routes->match(['get', 'post'], 'usercontroller/forgot_password', 'UserController::forgot_password');
$routes->match(['get', 'post'], 'change_password_token/(:any)', 'UserController::change_password_token/$1');


$routes->get('/emplogin', 'EmployerController::emplogindex');
$routes->get('/empregister', 'EmployerController::empregister');

//FOR EMPLOYER
// $routes->group('', ['filter' => 'employerfilter'], function ($routes) {
$routes->get('/employerhome', 'EmployerController::employerhome');
$routes->get('/postvacancy', 'EmployerController::postvacancy');
$routes->get('/jobpost', 'EmployerController::jobpost');
$routes->get('/jobapplicants', 'EmployerController::applicantdetails');
$routes->post('/addjob', 'EmployerController::addjob');
$routes->match(['get', 'post'], '/emplogin', 'EmployerController::emplogin');
$routes->get('/cancel_jobpost/(:any)', 'EmployerController::jobpost_cancel/$1');
$routes->post('/registeremployer', 'EmployerController::registeremployer');
$routes->get('/jobdetails/(:num)', 'EmployerController::jobdetails/$1');
$routes->get('/appdetails/(:num)', 'EmployerController::appdetails/$1');
$routes->get('/applicant_hired/(:num)', 'EmployerController::applicant_hired/$1');
$routes->get('/applicant_reject/(:num)', 'EmployerController::applicant_reject/$1');

// });

//FOR ADMIN
// $routes->group('', ['filter' => 'adminfilter'], function ($routes) {
$routes->get('/adminhome', 'AdminController::adminhome');
$routes->get('/employerregistration', 'AdminController::registeremps');
$routes->get('/jobvacancy', 'AdminController::jobvacant');
$routes->get('/manageuser', 'AdminController::manageuser');
$routes->get('/empdetails/(:num)', 'AdminController::empdetails/$1');
$routes->get('/adminlogin', 'AdminController::adminlogin');
$routes->match(['get', 'post'], '/adlogin', 'AdminController::adlogin');
$routes->get('/employer_approved/(:num)', 'AdminController::employer_approved/$1');
$routes->get('/employer_decline/(:num)', 'AdminController::employer_decline/$1');
$routes->get('/vacancydetails/(:num)', 'AdminController::vacancydetails/$1');
$routes->get('/vacancy_approved/(:num)', 'AdminController::vacancy_approved/$1');
$routes->get('/vacancy_decline/(:num)', 'AdminController::vacancy_decline/$1');
$routes->get('/applicantinfo', 'AdminController::applicantinfo');
// $routes->get('/jobdetails/(:num)', 'AdminController::jobdetails/$1');
// });