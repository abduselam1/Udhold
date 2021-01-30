<?php

class Post extends ORM
{

    public function __construct(){
        self::$modelClass = 'post';
        parent::__construct();
    }


    // public $id;
    // public $title;
    // public $content;
    // public $catagory;
    // public $avatar;
    // public $like;
    // public $dislike;
    
}