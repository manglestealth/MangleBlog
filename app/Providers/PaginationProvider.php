<?php namespace App\Providers;

use App\Expand\ExpandPagination;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Pagination\Paginator;

class PaginationProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        Paginator::presenter(function (AbstractPaginator $paginator) {
            return new ExpandPagination($paginator);
        });
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
