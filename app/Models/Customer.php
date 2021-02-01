<?php 

class Customer extends ORM
{
    public function __construct(){
        self::$modelClass = 'customer';
        parent::__construct();
    }

}