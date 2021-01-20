<?php
// namespace Classes;

class ORM{

    // protected $driver;
    // protected $host;
    // protected $user;
    protected $database;
    // protected $password;
    public static $modelClass;
    protected $pdo;
    public function __construct()
    {
        $db_property = file_get_contents('./config.json');
        $db_property = json_decode($db_property);
        $driver = $db_property->database->driver;
        $host = $db_property->database->host;
        $user = $db_property->database->user;
        $database = $db_property->database->database;
        $password = $db_property->database->password;
        echo '=============';

        $this->$database = mysqli_connect($host,$user,$password,$database);
        echo $this->$database;
        if ($pdo->connect_errno) {
            echo "connection faild";
        }else{
        }
        // self::$pdo = new PDO("$driver:server=$host;dbname$database;charset=utf8",$user,$password);
        // self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected";
    }

    // public static function __callStatic($function,$params){
    //     echo $function."<br/><hr/>";
    //     print_r($params);
    //     self::$function($params);
    // }
    

    public function create($array){
        // return $array;
        print_r(self::$modelClass);
    }

    public function delete(){
        echo "deleted ".self::$modelClass."==========";
    }

    public function get(){
        echo "geted";
    }

    public function all(){
        echo "printed all";
    }
    
    public function update(){
        echo "updated";
    }

    public function modelClassInstance($modelName){
        self::$modelClass = $modelName;
    }

    public function find($id){

    }

    public function findByEmail($email){
        echo $this->database;
        $model = self::$modelClass;
        $query_string =  "SELECT * FROM $model WHERE email = '$email'";
        $row_value = $this->database->query($query_string);
        if ($row_value->num_rows>0) {
            while ($row  = $row_value->fetch_assoc()) {
                return [
                    "email" => $row["email"],
                    "password"=> $row["password"]
                ];
            }
        }
    }
}