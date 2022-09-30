<?php
session_start();
spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.php';
});

date_default_timezone_set('Europe/Paris');

include './functions/loadFunction.php'; 
var_dump("test");
//require_once './includes/head.php';
//require_once './includes/main.php';
//require_once './includes/footer.php';
?>