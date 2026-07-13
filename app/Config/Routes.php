<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// CellaVie — public portal routes

$routes->get('/', 'Portal::index');
$routes->get('shop', 'Portal::shop');
$routes->get('shop/(:segment)', 'Portal::shop/$1');
$routes->get('about', 'Portal::about');
$routes->get('science', 'Portal::science');
$routes->get('faq', 'Portal::faq');
$routes->get('contact', 'Portal::contact');
$routes->get('privacy-policy', 'Portal::privacy');
$routes->get('terms-of-service', 'Portal::terms');
$routes->get('shipping-policy', 'Portal::shipping');
