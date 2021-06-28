<?php

/*
 * Plugin Name: new-plugin
 * Plugin URI: http://www.demo.com
 * version: 1.0.0
 * Text Domain : new-plugin
 */

if ( ! defined('ABSPATH')){
    die();
}

if (file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;


function activate_new_plugin(){
    Activate::activate();
}

function deactivate_new_plugin(){
    Deactivate::deactivate();
}
register_activation_hook(__FILE__,'activate_new_plugin');
register_deactivation_hook(__FILE__,'deactivate_new_plugin');
if (class_exists("Inc\\Init")){
    Inc\init::register_service();
}
