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
    
    public static function guest(){
        if(!isset($_SESSION['authenticated'])){
            return true;
        }else{
            return false;
        }
    }
}