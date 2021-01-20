<?php

// namespace Classes;
// use App\Controllers;
include('functions.php');
class Route 
{
    protected $request = null;
    public static $flag = false;
    protected static $getRoutes = [];
    protected static $postRoutes = [];

    public static function set($route_name, $function){
        if ($route_name == $_GET['url']) {
            return $function->__invoke();
        }
    } 

    public static function get($route_name,$controllerClassAndMethod)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            $explode_class_and_method = explode('@', $controllerClassAndMethod);

            // for checking if there is a route parameter
            $opening_curly_brace = strpos($route_name,'{');
            $closing_curly_brace = strpos($route_name,'}');
            if ($opening_curly_brace !== false && $closing_curly_brace !== false) {

                
                $explode_route_name = explode('/',$route_name);

                foreach ($explode_route_name as $key => $value) {
                    if (strpos($value,'{') !== false) {
                        $index_of_route_parameter = $key;
                        break;
                    }
                }
                
                $explode_route_value = explode('/',$_GET['url']);
                if (count($explode_route_value) === count($explode_route_name)) {
                    $route_parameter_value = $explode_route_value[$index_of_route_parameter];
                    $url = implode('/',$explode_route_value);
                }else{
                    return;
                }
                
                if ($url == $_GET['url']) {
                    // echo $route_name;
                    self::$flag = true;
                    call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],$route_parameter_value);
                }
                // getting the route parameter name
                // $route_parameter_name = substr($route_name,$opening_curly_brace+1,($opening_curly_brace-$closing_curly_brace));

                // //getting the last index of '/'
                // $last_index_of_backslash = strpos($_GET['url'],'/');
                
                // //checking if the las index of back slash is before the route parameter or after the route parameter
                // if ($last_index_of_backslash > $closing_curly_brace) {
                    
                // }

                // //getting the route parameter value
                // $route_parameter_value = substr($_GET['url'],$opening_curly_brace,$opening_curly_brace-$closing_curly_brace);
            }else{
                if ($route_name == $_GET['url']) {
                    // echo $route_name;
                    self::$flag = true;
                    call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],'abdu');
                }
            }


            
        }

    }

    public static function post($route_name,$controllerClassAndMethod)
    {
        if ($route_name == $_GET['url']) {
            $explode_class_and_method = explode('@', $controllerClassAndMethod);
            self::$flag = true;
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // var_dump($_FILES);
                // $request;
                // print_r($_FILES);
                foreach ($_REQUEST as $key => $value) {
                    $request[$key] = $value;
                }
                if (count($_FILES) !== 0) {
                    foreach ($_FILES as $file_key => $file_value) {
                        $request[$file_key] = $file_value;
                    }
                }
            }
            // print_r($request);
            call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],$request);
        }
    }
}

?>