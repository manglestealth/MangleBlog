<?php

namespace App\Expand;

use Illuminate\Pagination\BootstrapThreePresenter;
use Illuminate\Contracts\Pagination\Paginator as PaginatorContract;
class ExpandPagination extends BootstrapThreePresenter
{



    /**
     * Create a simple Bootstrap 3 presenter.
     *
     * @param  \Illuminate\Contracts\Pagination\Paginator  $paginator
     * @return void
     */
    public function __construct(PaginatorContract $paginator)
    {
        $this->paginator = $paginator;
    }

    /**
     * Determine if the underlying paginator being presented has pages to show.
     *
     * @return bool
     */
    public function hasPages()
    {
        return $this->paginator->hasPages() && count($this->paginator->items()) > 0;
    }

    public function render()
    {
        if ($this->hasPages())
        {
            return sprintf(
                '<ul class="am-pagination blog-pagination">%s %s</ul>',
                $this->getPreviousButton(),
                $this->getNextButton()
            );
        }

        return '';
    }

    /**
     * Get HTML wrapper for disabled text.
     *
     * @param  string  $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        if($text=='&laquo;')
            return '<li class="disabled am-pagination-prev"><span>'.$text.'上一页</span></li>';
        elseif($text=='&raquo;')
            return  '<li class="disabled am-pagination-next"><span>下一页'.$text.'</span></li>';
        else
            return   '<li class="disabled"><span>'.$text.'</span></li>';
    }

    /**
     * Get HTML wrapper for active text.
     *
     * @param  string  $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        if($text=='&laquo;')
            return '<li class="active am-pagination-prev"><span>'.$text.'上一页</span></li>';
        elseif($text=='&raquo;')
            return  '<li class="active am-pagination-next"><span>下一页'.$text.'</span></li>';
        else
            return   '<li class="active"><span>'.$text.'</span></li>';
    }


    protected function getAvailablePageWrapper($url, $page, $rel = null)
    {
        $rel = is_null($rel) ? '' : ' rel="'.$rel.'"';




        if($page=='&laquo;')
            return '<li class="active am-pagination-prev"><span><a href="'.htmlentities($url).'"'.$rel.'>'.$page.'上一页</a></span></li>';
        elseif($page=='&raquo;')
            return  '<li class="active am-pagination-next"><span><a href="'.htmlentities($url).'"'.$rel.'>下一页'.$page.'</a></span></li>';
        else
            return   '<li class="active"><span>'.$text.'</span></li>';



    }

}