<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cache;
class ComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

		view()->composer('blog.public.main',function($view){
            //通过缓存获取category，若没有读取数据库并写入缓存
            if(Cache::has('Category'))
            {
                $categories = Cache::get('Category');
            }else{

                $categories = \App\Category::all();
                Cache::put("Category",$categories,60*24);
            }
           $view->with('categories',$categories);
        });
	}

}
