<?php

/**
 * Myth:Auth routes file.
 */

$routes->group('', ['namespace' => 'Myth\Auth\Controllers'], function($routes) {
    // Login/out
    $routes->get('admin/login', 'AuthController::login', ['as' => 'login']);
    $routes->post('admin/login', 'AuthController::attemptLogin');
    $routes->get('admin/logout', 'AuthController::logout');

    // Registration
    //$routes->get('register', 'AuthController::register', ['as' => 'register']);
    //$routes->post('register', 'AuthController::attemptRegister');

    // Activation
   // $routes->get('activate-account', 'AuthController::activateAccount', ['as' => 'activate-account']);
   // $routes->get('resend-activate-account', 'AuthController::resendActivateAccount', ['as' => 'resend-activate-account']);

    // Forgot/Resets
   // $routes->get('forgot', 'AuthController::forgotPassword', ['as' => 'forgot']);
    //$routes->post('forgot', 'AuthController::attemptForgot');
    //$routes->get('reset-password', 'AuthController::resetPassword', ['as' => 'reset-password']);
   // $routes->post('reset-password', 'AuthController::attemptReset');
   // $routes->get('admin/projects/images/(:any)','AuthController::editImages/$1', ['as' => 'images']);
    $routes->get('admin/projects', 'AuthController::projects' ,['filter' => 'role:admin']);
    $routes->match(['get', 'post'],'admin/projects/edit/(:any)', 'AuthController::editProject/$1' ,['filter' => 'role:admin']);
    $routes->match(['get', 'post'], 'admin/projects/create', 'AuthController::createProject' ,['filter' => 'role:admin']);
    $routes->match(['get', 'post'], 'admin/projects/delete/(:any)', 'AuthController::deleteProject/$1' ,['filter' => 'role:admin']);
    $routes->match(['get', 'post'], 'admin/projects/images/(:any)', 'AuthController::editImages/$1' ,['filter' => 'role:admin']);
    $routes->match(['get', 'post'], 'admin/projects/description/(:any)', 'AuthController::editDescription/$1' ,['filter' => 'role:admin']);
    $routes->match(['get', 'post'], 'admin/projects/delImage/(:any)', 'AuthController::delImage/$1' ,['filter' => 'role:admin']);
    $routes->get('admin/users/', 'AuthController::viewUsers' ,['filter' => 'role:admin']);
    $routes->get('admin/information/', 'AuthController::information' ,['filter' => 'role:admin']);
   // $routes->get('admin/users/(:any)', 'AuthController::viewUsers/$1');
    
});

