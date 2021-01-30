<?php

class Middleware
{
    public static function auth(){
        if (isset($_SESSION['authenticated'])) {
            return true;
        }else{
            return false;
        }
    }
    
    public static function guard(){
        if(!isset($_SESSION['authenticated'])){
            return true;
        }else{
            return false;
        }
    }
}