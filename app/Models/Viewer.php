<?php 

class Viewer extends ORM
{
    public function __construct(){
        self::$modelClass = 'viewer';
        parent::__construct();
    }

}