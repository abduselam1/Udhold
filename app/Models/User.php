<?php
// namespace App\Models;

class User extends ORM{

   public function __construct(){
      self::$modelClass = 'user';
  }

   public $first_name = 'abduselam';
   public $last_name = 'hafiz';
   public $email = 'abduselamhafiz@gamil.com';
   public $password = '1234567890';
}