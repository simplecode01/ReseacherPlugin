<?php
/*
Plugin Name: Researcher HUMIC
Plugin URI: https://github.com/simplecode01/ReseacherPlugin
Description: This plugin use to input Reseacher data
Version: 1.1
Author: simplecode01
Author URI: https://simplecode01.wordpress.com
*/
if(!defined('ABSPATH')){
    die;
}

define('Researcher_Version', '1.0.0');

require_once plugin_dir_path(__file__).'includes/class-researcher-init.php';

function Researcher_activate(){
    Researcher_Init::activate();
}
function Researcher_deactivate(){
    Researcher_Init::deactivate();
}

register_activation_hook(__file__,'Researcher_activate');
register_deactivation_hook(__file__,'Researcher_deactivate');

require_once plugin_dir_path(__file__).'includes/class-researcher.php';

function init(){
    if(class_exists('Researcher')){
        $dev = new Researcher();
        $dev->run();
    }
}

init();
