<?php


$get_the_json_file = file_get_contents('./config.json');
$session_time = json_decode($get_the_json_file);
// print_r($session_time);
$session_time = $session_time->session;
// var_dump($session_time);
$session_time = $session_time * 60;
// die($session_time);
ini_set('session.cookie_lifetime',"$session_time");

session_start();
// include "./classes/connection.php";

require_once('./Routes.php');
// require_once('vendor/autoload.php');
require_once('./classes/functions.php');

function __autoload($class_name){
    if (file_exists('./classes/'.$class_name.'.php')) {
        require_once './classes/'.$class_name.'.php';
    }else if(file_exists('./app/controllers/'.$class_name.'.php')){
        require_once './app/controllers/'.$class_name.'.php';
    }else if(file_exists('./app/Models/'.$class_name.'.php')){
        require_once './app/Models/'.$class_name.'.php';
    }else if(file_exists('./app/controllers/Auth/'.$class_name.'.php')){
        require_once './app/controllers/Auth/'.$class_name.'.php';
    }else if(file_exists('./app/config/'.$class_name.'.php')){
        require_once './app/config/'.$class_name.'.php';
    }else{
        echo "Class not found";
    }
}
?>