<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;


use Illuminate\Http\Request;
use App\Http\Requests\StoreArticlePostRequest;
use Illuminate\Support\Facades\Event;

class ArticleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //通过缓存获取category，若没有读取数据库并写入缓存
        if(Cache::has('Category'))
        {
            $categories = Cache::get('Category');
        }else{

            $categories = \App\Category::all();
            Cache::put("Category",$categories,60*24);
        }

        $data = [
            "category"=>$categories,
         ];
        return view('admin.article.createArticle',$data);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(StoreArticlePostRequest $request)
	{
        $article = new \App\Article;
        $article->title = $request->title;
        $article->abstract = $request->abstract;
        $article->category = $request->category;
        $article->time = date("Y-m-d H:i:s",time());
        $article->save();

        $content = new \App\Content;
        $content->aid = $article->id;
        $content->content = $request->content;
        $content->save();
        //event(new \App\Events\PostArticle($article));
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
