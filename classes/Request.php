<?php

// namespace Classes;

class Request{

    public static function post(){
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
        return $request;
    }
}
?>