<?php
defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'default';
$query_builder = true;

//dev
// $db['default'] = array(
//     'dsn'    => '',
//     'hostname' => 'localhost',
//     'username' => 'root',
//     'password' => '',
//     'database' => 'community',
//     'dbdriver' => 'mysqli',
//     'dbprefix' => '',
//     'pconnect' => false,
//     'db_debug' => (ENVIRONMENT !== 'production'),
//     'cache_on' => false,
//     'cachedir' => '',
//     'char_set' => 'utf8',
//     'dbcollat' => 'utf8_general_ci',
//     'swap_pre' => '',
//     'encrypt' => false,
//     'compress' => false,
//     'stricton' => false,
//     'failover' => array(),
//     'save_queries' => true
// );

//prod
 $db['default'] = array(
    'dsn'    => '',
    'hostname' => 'localhost',
    'username' => 'u676725186_belan',
    'password' => 'belan12345',
    'database' => 'u676725186_belan',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => array(),
    'save_queries' => true
);
