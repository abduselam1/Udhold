<?php

class Catagory extends ORM
{
    public function __construct(){
        self::$modelClass = 'catagory';
        parent::__construct();
    }

}