<?php 

class Secret extends ORM
{
    public function __construct(){
        self::$modelClass = 'secret';
        parent::__construct();
    }

}