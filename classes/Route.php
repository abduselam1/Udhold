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

    public static function get($route_name,$controllerClassAndMethod,$middleware = '')
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET" && self::$flag == false) {

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

                    $explode_route_name[$index_of_route_parameter] = $explode_route_value[$index_of_route_parameter];
                    
                    $url = implode('/',$explode_route_name);
                }else{
                    return;
                }
                
                if ($url == $_GET['url']) {
                    if ($middleware != '') {
                        $checking_for_middleware = Middleware::$middleware();
                        if ($checking_for_middleware == true) {
                            self::$flag = true;
                            call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],$route_parameter_value);
                        }else{
                            self::redirectIfForMiddleware($middleware);
                        }
                    }else{
                        self::$flag = true;
                        call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],$route_parameter_value);

                    }
                }
            }else{
                if ($route_name == $_GET['url']) {
                    // echo $route_name;
                    if ($middleware != '') {
                        $checking_for_middleware = Middleware::$middleware();
                        if ($checking_for_middleware == true) {
                            self::$flag = true;
                            call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]]);
                        }else{
                            self::redirectIfForMiddleware($middleware);
                        }
                    }else{
                        self::$flag = true;
                        call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]]);
                    }
                }
            }


            
        }
    }
    //     if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    //         $explode_class_and_method = explode('@', $controllerClassAndMethod);

    //         // for checking if there is a route parameter
    //         $opening_curly_brace = strpos($route_name,'{');
    //         $closing_curly_brace = strpos($route_name,'}');
    //         if ($opening_curly_brace !== false && $closing_curly_brace !== false) {

                
    //             $explode_route_name = explode('/',$route_name);

    //             foreach ($explode_route_name as $key => $value) {
    //                 if (strpos($value,'{') !== false) {
    //                     $index_of_route_parameter = $key;
    //                     break;
    //                 }
    //             }
                
    //             $explode_route_value = explode('/',$_GET['url']);
    //             if (count($explode_route_value) === count($explode_route_name)) {
    //                 $route_parameter_value = $explode_route_value[$index_of_route_parameter];
    //                 $url = implode('/',$explode_route_value);
    //             }else{
    //                 return;
    //             }
                
    //             if ($url == $_GET['url']) {
    //                 self::$flag = true;
    //                 call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],$route_parameter_value);
    //             }
    //         }else{
    //             if ($route_name == $_GET['url']) {
    //                 // echo $route_name;
    //                 self::$flag = true;
    //                 call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],'abdu');
    //             }
    //         }


            
    //     }
    //     if ($middleware != '') {
    //         $checking_for_middleware = Middleware::$middleware();
    //         if ($checking_for_middleware == true) {

    //         }else{
    //             if ($middleware == 'auth') {
    //                 redirect('login');
    //             }else if($middleware == 'guard'){
    //                 header("location:admin/dashboard");
    //             }else{
    //                 print_r('error occurd');
    //                 // abourt('unknown Middleware');
    //             }
    //         }
    //     }else{
    //     }

    // }


    public static function redirectIfForMiddleware($middleware){
        if ($middleware == 'auth') {
            redirect('/custom/mvc/login');
        }else if($middleware == 'guard'){
            header("location:admin/dashboard");
        }else{
            print_r('error occurd');
            // abourt('unknown Middleware');
        }
    }
    
    public static function post($route_name,$controllerClassAndMethod,$middleware = '')
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && self::$flag == false) {

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

                    $explode_route_name[$index_of_route_parameter] = $explode_route_value[$index_of_route_parameter];

                    $url = implode('/',$explode_route_name);
                }else{
                    return;
                }

                if ($url == $_GET['url']) {
                    $request = Request::post();
                    if ($middleware != '') {
                        $checking_for_middleware = Middleware::$middleware();
                        if ($checking_for_middleware == true) {
                            self::$flag = true;
                            call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],$request,$route_parameter_value);
                        }else{
                            self::$flag = true;
                            self::redirectIfForMiddleware($middleware);
                        }
                    }else{
                        self::$flag = true;
                        call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],$request,$route_parameter_value);
                    }
                }
            }else{

                if ($route_name == $_GET['url']) {
                    $request = Request::post();
                    // echo $route_name;
                    if ($middleware != '') {
                        $checking_for_middleware = Middleware::$middleware();
                        if ($checking_for_middleware == true) {
                            self::$flag = true;
                            call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],$request);
                        }else{
                            self::$flag = true;
                            self::redirectIfForMiddleware($middleware);
                        }
                    }else{
                        self::$flag = true;
                        call_user_func([$explode_class_and_method[0],$explode_class_and_method[1]],$request);
                    }
                }
            }
        }
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // var_dump($_FILES);
//     // $request;
//     // print_r($_FILES);
//     foreach ($_REQUEST as $key => $value) {
//         $request[$key] = $value;
//     }
//     if (count($_FILES) !== 0) {
//         foreach ($_FILES as $file_key => $file_value) {
//             $request[$file_key] = $file_value;
//         }
//     }
// }
// print_r($request);
?>