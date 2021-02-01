<?php

class Hash{

    // public static $pre = "&^#)03489kjHUI#8)(&^^)>^";
    // public static $post = "3&Rh)(92KSY3_+:;";

    public static function make($value){

        
        // $value = self::$pre.$value.self::$post;
        $hashed = hash('sha256',$value);
        return $hashed;

    }

    public static function check($value, $hashedValue){
        // $value = self::$pre.$value.self::$post;
        $hashed = hash('sha256',$value);
        // hash('sha256',$value);
        // print_r($hashedValue);
        // echo "<br/>";
        // print_r($hashed);
        
        // if ($hashed == $hashedValue) {
        //     # code...
        // }
        return $hashed == $hashedValue ? true : false;

    }

}