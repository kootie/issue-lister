<?php

//config file
require_once 'config.php';

//autoloader - to load all classes
function my_autoloader($class_name) {
    require_once 'lib/' . $class_name . '.php';
}

spl_autoload_register('my_autoloader');


?>