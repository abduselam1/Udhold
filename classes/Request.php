<?php

// namespace Classes;

class Request{
    public function __construct(){
        return $this->post();
    }

    public function post(){
        if (count($_POST)!= 0) {
            return count($_post);
        }else{
            return ['name' => 'abdu'];
        }
    }
}
?>