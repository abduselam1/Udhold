<?php

function view($new_file)
{
   require_once('../../view/'.$view_file.'.php'); 
}

function abort($error_code)
{
    require_once('./view/error/'.$error_code.'.php');
}

function authenticate($request){

    $email = $request['email'];
    $password = $request['password'];

    $user = new User();
    $values = $user->findByEmail($email);
    var_dump($values);
    // $db = db();
    // $query = "SELECT * FROM user";
    // $filtered = $db->query($query);
    // print_r($filtered->fetch_assoc());

}

function sessionOnce($name,$message){
     return true;
}

function setSesstionForAuthentication($id){

}

function getSessionForAuthentication(){

}

function getSession($name){

}

function destroyOneSession($name){
    
}

function destroySession(){

}

function auth(){
    echo "";
}

function user(){
    echo "afda";
}

// function db(){
//     $db = mysqli_connect('localhost','root','','museum');
//     return $db;
// }