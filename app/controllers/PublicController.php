<?php

class PublicController extends Controller
{
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
}