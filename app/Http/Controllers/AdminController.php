<?php
/**
 * Created by PhpStorm.
 * User: mangle
 * Date: 2015/4/5
 * Time: 18:16
 */

namespace App\Http\Controllers;


class AdminController extends Controller{
   public function index(){
       return view('admin.index.index');
   }

    public function write(){
        return view('admin.article.write');
    }
} 