<?php

class AdminController extends Controller
{
    public function index(){
        $catagory = new Catagory();
        $catagory = $catagory->all();

        $post = new Post();
        $likes = $post->counts('likes');
        $user = auth();
        parent::view('admin/dashboard',compact('catagory','likes','user'));
    }

    public function show(){
        
    }

    
    public function showPost()
    {
        $posts = new Post();
        $posts = $posts->all();
        $user = auth();
        parent::view('admin/post',compact('posts','user'));
    }

    public function post($request){
        if (trim($request['title']) == '' || trim($request['content']) == '' || $request['catagory']  == '') {
            redirect('/custom/mvc/admin/posts','error|You have to fill all of the fields');
        }else{
            $new_post = new Post();
            $catagory_id = $request['catagory'];
            $stored_value = FileApload::storeImage($request['postImage'],"image/$catagory_id");
            if ($stored_value =='error') {
                redirect('/custom/mvc/admin/posts','error|somethings gone wrong please try again');
            }else{
                $new_post = $new_post->create([
                    'title' => $request['title'],
                    'content' =>$request['content'],
                    'catagory_id' => $catagory_id,
                    'avatar' => $stored_value
                ]);
                if ($new_post == true) {
                    redirect('/custom/mvc/admin/posts','success|Your content is succssfully posted');
                }else{
                    redirect('/custom/mvc/admin/posts','error|somethings gone wrong please try again');
                }
            }
        }
        
        
    }

    public function findPost($id){
        $user = auth();

        $post = new Post();
        $post = $post->find($id);
        parent::view('admin/show',compact('post','user'));
    }

    public function editPost($id){
        $post = new Post();
        $post = $post->find($id);
        $user = auth();
        $catagory = new Catagory();
        $catagory = $catagory->all();
        // var_dump($user);
        parent::view('admin/edit-post',compact('catagory','post','user'));
    }

    public function updatePost($request,$id)
    {
        $post = new Post();
        $catagory_id = $request['catagory'];
        $update;
        if ($request['postImage']['error'] > 0) {
            $updated = $post->update($id,[
                'title' => $request['title'],
                'content' =>$request['content'],
                'catagory_id' => $catagory_id,
            ]);
        }else{
            $stored_value = FileApload::storeImage($request['postImage'],"image/$catagory_id");
            if ($stored_value !='error') {
                $updated = $post->update($id,[
                    'title' => $request['title'],
                    'content' =>$request['content'],
                    'catagory_id' => $catagory_id,
                    'avatar' => $stored_value
                ]); 
            }
        }

        if ($updated == true) {
            redirect('/custom/mvc/admin/posts','success|You have successfuly Updated');
        }else{
            redirect('/custom/mvc/admin/posts','error|something goes wrong please try agin later');
        }
    }

    public function showPostForm(){
        $catagory = new Catagory();
        $catagory = $catagory->all();
        $user = auth();
        parent::view('admin/create-post',compact('catagory','user'));
    }

    public function deletePost($id){
        $post = new Post();
        $delete = $post->delete($id);

        if ($delete == true) {
            redirect('/custom/mvc/admin/posts','success|You have successfuly deleted one post');
        }else{
            redirect('/custom/mvc/admin/posts','error|something goes wrong please try agin later');
        }
    }

    /*
    end of the post methods


    and start of secret methods
    */

    public function showSecret(){
        $user = auth();
        $secret = new Secret();
        $secret = $secret->all();
        parent::view('admin/secret/index',compact('user','secret'));
    }

    public function showSecretForm(){
        $user = auth();
        $catagory = new Catagory();
        $catagory = $catagory->all();
        parent::view('admin/secret/create',compact('user','catagory'));
    }

    public function secret($request){

        // var_dump($request/);
        // FileApload::storeImage($request['postImage'],"image/");
        if (trim($request['title']) == '' || trim($request['content']) || $request['catagory']) {
            redirect('/custom/mvc/admin/secrets','error|You have to fill all the values');
        }else{
            $stored_value = FileApload::storeImage($request['postImage'],"image/$catagory_id");
            if ($stored_value == 'error') {
                redirect('/custom/mvc/admin/secrets','error|somethig is gone wrong please try again');
            }else{
                $new_secret = new Secret();
                $catagory_id = $request['catagory'];
                $new_secret = $new_secret->create([
                    'title' => $request['title'],
                    'body' =>$request['content'],
                    'catagory_id' => $catagory_id,
                    'image' => $stored_value
                ]);
                if ($new_secret == true) {
                    redirect('/custom/mvc/admin/secrets','success|Your content is succssfully posted');
                }else{
                    redirect('/custom/mvc/admin/secrets','error|somethig is gone wrong please try again');
                }
            }
    
        }
    }

    public function findSecret($id){
        $user = auth();
        $secret = new Secret();

        $secret = $secret->find($id);
        // var_dump($secret);
        parent::view('admin/secret/show',compact('user','secret'));
    }

    public function editSecret($id){
        $user = auth();
        $secret = new Secret();
        $secret = $secret->find($id);
        $catagory = new Catagory();
        $catagory = $catagory->all();
        parent::view('admin/secret/edit',compact('user','secret','catagory'));
    }

    public function updateSecret($request, $id){

        $secret = new Secret();
        $updated;
        if (trim($request['title']) == '' || trim($request['catagory']) == '' || trim($request['content']) == '' ) {
            redirect('/custom/mvc/admin/secrets','error|You have to fill all the values');
        }else{
            if ($request['postImage']['error'] > 0) {
                $updated = $secret->update($id,[
                    'title' => $request['title'],
                    'catagory' => $request['catagory'],
                    'body' => $request['content']
                ]);
            }else{
                $catagory_id = $request['catagory'];
                $stored_value = FileApload::storeImage($request['postImage'],"image/$catagory_id");
                if ($stored_value != 'error') {
                    $updated = $secret->update($id,[
                        'title' => $request['title'],
                        'body' => $request['content'],
                        'image' => $stored_value
                    ]); 
                }
            }
    
            if ($updated == true) {
                redirect('/custom/mvc/admin/secrets','success|You have succssfully updated');
            }else{
                redirect('/custom/mvc/admin/secrets','error|somethig is gone wrong please try again');
            }
        }

    }

    public function deleteSecret($id){
        $secret = new Secret();
        $secret = $secret->delete($id);
        if($secret == true){
            redirect('/custom/mvc/admin/secrets','success|You have successfuly deleted one of Your secret post');
        }else{
            redirect('/custom/mvc/admin/secrets','error|Something goes wrong please try again later');
        }
    }

    /*
    end of secret methods 


    and start of catagory methods
    */

    public function showCatagory(){
        $user = auth();
        $catagory = new Catagory();
        $catagory = $catagory->all();
        parent::view('admin/catagory/index',compact('user','catagory'));
    }

    public function showCatagoryForm(){
        $user = auth();
        parent::view('admin/catagory/create',compact('user'));
    }

    public function Catagory($request){
        $new_catagory = new Catagory();
        if (trim($request['name']) == '') {
            redirect('/custom/mvc/admin/catagories','error|You have to fill the name');
        }else{
            $stored_value = FileApload::storeImage($request['catagoryImage'],"image/catagories");
            if ($stored_value == 'error') {
                redirect('/custom/mvc/admin/catagories','error|somethig is gone wrong please try again');
            }else{
                $new_catagory = $new_catagory->create([
                    'name' => $request['name'],
                    'img_path' => $stored_value
                ]);
                if ($new_catagory == true) {
                    redirect('/custom/mvc/admin/catagories','success|Your Catagory is succssfully added');
                }else{
                    redirect('/custom/mvc/admin/catagories','error|somethig is gone wrong please try again');
                }
            }
        }
    }

    public function editCatagory($id){
        $catagory = new Catagory();
        $catagory = $catagory->find($id);
        // var_dump($post);
        $user = auth();
        // var_dump($user);
        parent::view('admin/catagory/edit',compact('user','catagory'));
    }

    public function updateCatagory($request,$id){
        $catagory = new Catagory();
        $update;
        if ($request['catagoryImage']['error']>0) {
            $update = $catagory->update($id,[
                'name' => $request['name']
            ]);
        }else{
            $stored_value = FileApload::storeImage($request['catagoryImage'],"image/catagories");
            if ($stored_value != 'error') {
                $update = $catagory->update($id,[
                    'name' => $request['name'],
                    'img_path' => $stored_value
                ]);
            }
        }

        if ($update == true) {
            redirect('/custom/mvc/admin/catagories','success|Your Catagory is succssfully Updated');
        }else{
            redirect('/custom/mvc/admin/catagories','error|somethig is gone wrong please try again');
        }
        
    }

    public function deleteCatagory($id){
        $catagory = new Catagory();
        $catagory = $catagory->delete($id);
        if($catagory == true){
            redirect('/custom/mvc/admin/catagories','success|You have successfuly deleted one of Your catagory');
        }else{
            redirect('/custom/mvc/admin/catagories','error|Something goes wrong please try again later');
        }
    }

    public function shwoSuggestion(){

        $user = auth();

        $suggestion = new Customer();
        $suggestion = $suggestion->all();

        parent::view('admin/suggestion',compact('user','suggestion'));

    }
}