<?php

class Post extends ORM
{

    public function __construct(){
        self::$modelClass = 'post';
    }


    public $title='title';
    public $content='content';
    public $posted_by='abduselam';
    
}