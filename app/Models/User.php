<?php
// namespace App\Models;

class User extends ORM{

   public function __construct(){
      self::$modelClass = 'user';
      parent::__construct();
  }

   public $id;
   public $name;
   public $last_name;
   public $email;
   public $avatar;
}