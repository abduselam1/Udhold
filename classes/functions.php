<?php

// function view($new_file)
// {
//    require_once('../../view/'.$view_file.'.php'); 
// }

function abort($error_code)
{
    require_once('./view/error/'.$error_code.'.php');
}

function authenticate($request){

    $email = $request['email'];
    $password = $request['password'];

    $user = new User();
    $user_values = $user->findByEmail($email);
    if (!$user_values) {
        return false;
    }
    // var_dump($user_values);
    if (Hash::check($password, $user_values->password) == true) {
        $_SESSION['id'] = $user_values->id;
        $_SESSION['authenticated'] = true;
        return true;
        // redirect('admin/index');
        // var_dump('correct');
    }else{
        return false;
    }
    

}

// function sessionOnce($name,$message){
//      return true;
// }

// function setSesstionForAuthentication($id){

// }

function getSessionForAuthentication(){
    if (isset($_SESSION['authenticated'])) {
        return true;
    }else{
        return false;
    }
}

function getSession($name){
    if (isset($_SESSION["$name"])) {
        return $_SESSION["$name"];
    }else{
        return false;
    }
}

// function destroyOneSession($name){
    
// }

function destroySession(){
    session_destroy();
}

function auth(){
    if (isset($_SESSION['authenticated'])) {
        $user = new User();
        return $user->find($_SESSION['id']);
    }else{
        return false;
    }
}

function guest(){
    
}

function user(){

}



function redirect($redirec_location,$session_value = ''){
    if ($session_value != '') {
        $session_value = explode('|' , $session_value);
        // var_dump($session_value);
        $_SESSION[$session_value[0]]  = $session_value[1];
    }
    // var_dump($redirec_location);
    header("location:$redirec_location");
}

// function db(){
//     $db = mysqli_connect('localhost','root','','museum');
//     return $db;
// }
function checkSuccessSession(){
    if (isset($_SESSION['success'])) {
        return true;
    }else{
        return false;
    }
}

function getSuccessSession($name){
    $message = $_SESSION["$name"];
    unset($_SESSION["$name"]);
    return $message;
}

function checkErrorSession(){
    if (isset($_SESSION['error'])) {
        return true;
    }else{
        return false;
    }
}

function getErrorSession($name){
    $message = $_SESSION["$name"];
    unset($_SESSION["$name"]);
    return $message;
}