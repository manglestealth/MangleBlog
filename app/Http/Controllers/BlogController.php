<?php

namespace App\Http\Controllers;
use Cache;
class BlogController extends Controller{

    public function __construct()
    {

    }

    public function index($id=null)
    {

        //通过缓存获取category，若没有读取数据库并写入缓存
        if(Cache::has('Category'))
        {
            $categories = Cache::get('Category');
        }else{

            $categories = \App\Category::all();
            Cache::put("Category",$categories,60*24);
        }

        //首页和分栏
        if($id)
        {
            $article = \App\Article::where('category',$id);
            $headTitle = $categories[($id)-1]->name;
        }else{
            $article = new \App\Article;
            $id = 0;
            $headTitle = "首页";
        }
        if(Cache::has('blogList_$id'))
        {
            $articleList = Cache::get('blogList_$id');

        }else{

            $articleList = $article->orderBy('id','desc')->paginate(15);
            Cache::put('articleList_$id',$articleList,60*24);

        }







        $data = [
            "articleList" => $articleList,
            "categories" => $categories,
            "category_id" => $id,
            "headTitle" => $headTitle,
        ];
        return view('blog.index.index',$data);
    }


    public function post($id)
    {
        $article = \App\Article::find($id);
        $content = \App\Content::where('aid',$id)->first();

        $data = [
            "article" => $article,
            "content" => $content,
            "category_id" => $article->category,
            "headTitle" => $article->title
        ];
        return view('blog.post.post',$data);
    }
}