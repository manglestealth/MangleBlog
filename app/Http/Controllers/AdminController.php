<?php
/**
 * Created by PhpStorm.
 * User: mangle
 * Date: 2015/4/5
 * Time: 18:16
 */

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller{
   public function index(){

       return view('admin.index.index');
   }

    public function write(){

    }
} 