<?php
// namespace Classes;

class ORM{

    // protected $driver;
    // protected $host;
    // protected $user;
    public static $where_value = '';
    public static $database;
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

        self::$database = new mysqli($host,$user,$password,$database);
        // echo $this->$database;
        if (self::$database->connect_errno) {
            echo "connection faild";
        }else{
        }
    }


    public function create($array){
        $model = self::$modelClass;
        $value_place_holder = $this->findPlaceHolders($array);
        $values = $this->findTheActualValue($array);

        $query = "INSERT INTO `$model` ($value_place_holder) VALUES ($values)";
        // var_dump($query);
        $row_value = self::$database->query($query);
        if ($row_value) {
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        $model = self::$modelClass;
        // var_dump($model);
        $query = "DELETE FROM $model WHERE id=$id";
        $delete = self::$database->query($query);
        // var_dump($delete);
        if ($delete == true) {
            return true;
        }else{
            return false;
        }
    }

    public function get(){
        $model = self::$modelClass;
        $where_value = self::$where_value;
        // if ($where_value == '') {
        //     $where_value = true;
        // }
        $query = "SELECT * FROM $model WHERE $where_value";
        $row_value = self::$database->query($query);
        // var_dump($query);
        $return_value = [];
        $model[0] = strtoupper($model[0]);
        if ($row_value->num_rows>0) {
            while ($row  = $row_value->fetch_assoc()) {
                $user = new $model();
                foreach ($row as $key => $value) {
                    $user->$key = $value;
                }
                $return_value[] = $user;
                // var_dump($row);
            }
            return $return_value;
        }
    }

    public function all(){
        $model = self::$modelClass;
        $query_string =  "SELECT * FROM $model WHERE 1";

        $row_value = self::$database->query($query_string);
        $return_value = [];
        $model[0] = strtoupper($model[0]);
        if ($row_value->num_rows>0) {
            while ($row  = $row_value->fetch_assoc()) {
                $collection = new $model();
                foreach ($row as $key => $value) {
                    $collection->$key = $value;
                }
                $return_value[] = $collection;
                // var_dump($row);
            }
            return $return_value;
        }
    }
    
    public function update($id,$data){
        $model = self::$modelClass;
        $value = $this->getUpdatedValue($data);
        $query = "UPDATE $model set $value WHERE id = $id";
        // var_dump($query);
        $update = self::$database->query($query);
        if ($update == true) {
            return true;
        }else{
            return false;
        }
    }

    public function getUpdatedValue($data){
        $update_value = '';
        foreach ($data as $key => $value) {
            $update_value = $update_value.$key.'=\''.$value.'\', ';
        }
        $len = strlen($update_value);
        $update_value = substr($update_value,0,$len-2);
        return $update_value;
    }

    public function modelClassInstance($modelName){
        self::$modelClass = $modelName;
    }

    public function find($id){
        $model = self::$modelClass;
        $query_string =  "SELECT * FROM $model WHERE id = '$id'";
        // var_dump($query_string);
        $row_value = self::$database->query($query_string);
        $model[0] = strtoupper($model[0]);
        if ($row_value->num_rows>0) {
            while ($row  = $row_value->fetch_assoc()) {
                $user = new $model();
                foreach ($row as $key => $value) {
                    $user->$key = $value;
                }
                return $user;
                // var_dump($row);
            }
        }else{
            return false;
        }
    }

    public function findByEmail($email){
        // echo $this->database;
        $model = self::$modelClass;
        $query_string =  "SELECT * FROM $model WHERE email = '$email'";
        // var_dump($query_string);
        $row_value = self::$database->query($query_string);
        if ($row_value->num_rows>0) {
            while ($row  = $row_value->fetch_assoc()) {
                $user = new User();
                foreach ($row as $key => $value) {
                    $user->$key = $value;
                }
                return $user;
                // var_dump($row);
            }
        }else{
            return false;
        }
    }


    public function findPlaceHolders($array){
        $place_holder = '';
        foreach ($array as $key => $value) {
            $place_holder = $place_holder.$key.',';
        }
        $len = strlen($place_holder);
        $place_holder = substr($place_holder,0,$len-1);
        return $place_holder;
    }

    public function findTheActualValue($array){
        $values = '';
        foreach ($array as $key => $value) {
            $values = $values."'".$value."'".',';
        }
        $len = strlen($values);
        $values = substr($values,0,$len-1);
        return $values;
    }

    public function counts($row){
        $model = self::$modelClass;
        $query = "SELECT SUM($row) as sum FROM $model WHERE 1";
        $counted_value = self::$database->query($query);
        return $counted_value->fetch_assoc()['sum'];
    }

    public function where($attribut_name,$condition,$attribut_value){
            // self::$where_value = "$attribut_name $condition $attribut_value";
            if (self::$where_value == '') {
                self::$where_value = self::$where_value." $attribut_name $condition $attribut_value";
            }else{

                self::$where_value = self::$where_value." and $attribut_name $condition $attribut_value";
            }
        
        return $this;
    }

    public function count($id){
        $model = self::$modelClass;
        $query = "SELECT COUNT(id) as count FROM $model WHERE id = $id";
        $counted_value = self::$database->query($query);
        return $counted_value->fetch_assoc()['count'];
    }

}