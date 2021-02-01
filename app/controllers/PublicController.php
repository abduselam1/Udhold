<?php

class PublicController extends Controller
{
    public static $ip='1234';

    // public function __construct(){
    //     self::$ip = $_SERVER['REMOTE_ADDR'];
        // echo '23456789';
        // $viewer = new Viewer();
        // $count = $viewer->check($this->$ip);
        // if ($count == 0) {
        //     $this->ip = 12345;
        // }else{
        //     $this->ip = 9876543;
        // }
    // }
    public function index(){
        $catagories = new Catagory();
        $catagories = $catagories->all();
        parent::view('public/index',compact('catagories'));
    }

    public function showByCatagories($catagory_id)
    {
        $post = new Post();
        $post = $post->where('catagory_id','=',$catagory_id)->get();
        parent::view('public/catagory',compact('post'));
    }

    public function search($request){
        print_r($request);
    }

    public function contactUs(){
        parent::view('public/contact-us');
    }

    public function devs(){
        parent::view('public/devs');
    }

    public function about(){
        $d = self::$ip;
        echo $d;
        // echo $_SERVER['REMOTE_ADDR'];
    }

    public function sendContact($request){
        $customer = new Customer();
        $ip = $_SERVER['REMOTE_ADDR'];
        $new_customer = $customer->create([
            'first_name' => $request['fname'],
            'middle_name' => $request['mname'],
            'last_name' => $request['lname'],
            'email' => $request['email'],
            'ip_address' => $ip,
            'body' => $request['body']
        ]);

        if ($new_customer == true) {
            redirect('contact-us','success|You have successfuly submited your message');
        }else{
            redirect('contact-us','error|something is wrong please try again later');
        }
        // var_dump($request);
    }
}