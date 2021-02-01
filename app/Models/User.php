<?php
// namespace App\Models;

class User extends ORM{

   public function __construct(){
      self::$modelClass = 'user';
      parent::__construct();
  }
}