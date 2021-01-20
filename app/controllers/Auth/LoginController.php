<?php
// include "./classes/Authentication.php";
class LoginController extends Controller
{

    public function __construct(){
        middleware('auth');
    }
    
    public function showLoginForm()
    {
        // $data = auth()->user();
        // print_r($data);
        $email=['message'=>'','old'=>''];
        $password = ['message' => ''];
        parent::view('auth/Login',compact('email','password'));
    }

    public function login($request)
    {
        if ($request['password'] !== '' && $request['email'] !== '') {
            authenticate($request);
        }
    }
}