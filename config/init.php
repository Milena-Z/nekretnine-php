<?php
// Zapocni sesiju
session_start();

// Ukljuci config fajl
require_once 'config.php';

// Ukljuci helpere
require_once 'helpers/system_helper.php';

//Autoloader
function myAutoload($class_name) 
{
    require_once 'lib/'.$class_name. '.php';
}

spl_autoload_register('myAutoload');
