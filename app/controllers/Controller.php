<?php


class Controller
{
    public function view($view_file,$data=[])
    {
        require_once('./view/'.$view_file.'.php');
    }
}
