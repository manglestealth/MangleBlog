<?php

namespace App\Handlers\Events;

use App\Events\PostArticle;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Logging\Log;
class LogPostArticle
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PostArticle  $event
     * @return void
     */
    public function handle(PostArticle $event)
    {
        $article = $event->article;
        $key = "article_".$article->id."_title_".$article->title;
        \Log::info($key);
    }
}
