<?php

class Post extends ORM
{

    public function __construct(){
        self::$modelClass = 'post';
        parent::__construct();
    }
    
}