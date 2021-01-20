<?php

// namespace App\Controller;

// use App\Models\User;

class UserController extends Controller
{

    public static function index(){
       $abdu = new Request();
    }

    public static function about(){
        echo "about page";
    }

    public static function home(){
        $abdu = new Request();
        return $abdu;
    }

    public function getUser($abdu)
    {
        $user  = new Post();
        $name = $abdu;
        // $name = User::first_name;
        // $name = $user::create('abdu','selam','hafiz');
        return parent::view('home',compact('name'));
        // var_dump($name);
    }

    public function post($request)
    {
        print_r($request);
    }


public function sampleRouteParameter($val,$another){
    print_r($val);
    echo "<br/>";
    print_r($another);
}

public function fileTest($request)
{
    $store_and_get_storage_path = FileApload::storeImage($request['image'],'image');
    $check = sessionOnce('success','abduselam');
    echo $store_and_get_storage_path;
}

public function testModel(){
    $post = new Post();
    $post->create("create");
}

}
