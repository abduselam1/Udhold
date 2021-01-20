<?php

// namespace Classes;
// use App\config;
class DatabaseConnection
{
    
    // public function connect($driver=$db,$host_address=$host,$user_name=$user,$database_name=$databse,$databse_password=$passowrd){
    //     $pdo = new PDO('$db'.$driver.':host='.$host_address.';dbname'.$database_name.';charset=utf8',$user_name,$databse_password);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     return $pdo;
    // }

    public function get($query)
    {
        $pdo = $this->connect();
        $pdo->prepare("$query");
    }
}