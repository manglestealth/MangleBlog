<?php

namespace App\Http\Controllers;

class BlogController extends Controller{

    public function __construct(){

    }

    public function index(){
        return view('blog.index.index');
    }
}