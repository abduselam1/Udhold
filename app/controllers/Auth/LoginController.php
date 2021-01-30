<?php
// include "./classes/Authentication.php";
class LoginController extends Controller
{

    // public function __construct(){
    //     middleware('auth');
    // }
    
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
        // var_dump($request['password']);
        if ($request['password'] !== '' && $request['email'] !== '') {
            if (authenticate($request)) {
                $user = auth();
                redirect('admin/dashboard');
            }else{
                $email=['message'=>'Incorrect Email address or wrong password','old'=>$request['email']];
                $password = ['message' => ''];
                parent::view('auth/login',compact('email','password'));
            }
        }else{
            $email=['message'=>'Incorrect Email address or wrong password','old'=>$request['email']];
            $password = ['message' => 'this credential is not much  to our system user'];
            parent::view('auth/login',compact('email','password'));
        }
    }

    public function logout(){
        session_destroy();
        redirect('login');
    }
}