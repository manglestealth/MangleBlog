@extends("blog.public.main")

@section("content")
<header class="am-g my-head">
  <div class="am-u-sm-12 am-article">
    <h1 class="am-article-title">{{$article->title}}</h1>
   <p class="am-article-meta">{{$article->time}}</p>
  </div>

</header>


<hr class="am-article-divider"/>
<div class="am-g am-g-fixed">
  <div class="am-u-md-12">
    <div class="am-g">
      <div class="am-u-sm-11 am-u-sm-centered">
        {{--<div class="am-cf am-article">--}}
          {{--<!-- 图片格式 start -->--}}
          {{--<div class="am-align-left"><img src="http://s.amazeui.org/media/i/demos/bing-1.jpg" alt="" width="240"></div>--}}

          {{--<div class="am-align-right"><img src="http://s.amazeui.org/media/i/demos/bing-2.jpg" alt="" width="240"></div>--}}
          {{--<!-- 图片格式 end -->--}}
          {{--<div>--}}
            {!! $content->content !!}
        </div>
        {{--<hr/>--}}

        <!-- 评论start-->
        {{--<ul class="am-comments-list">--}}
          {{--<li class="am-comment">--}}
            {{--<a href="#link-to-user-home">--}}
              {{--<img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/96/h/96/q/80" alt="" class="am-comment-avatar" width="48" height="48">--}}
            {{--</a>--}}
            {{--<div class="am-comment-main">--}}
              {{--<header class="am-comment-hd">--}}
                {{--<div class="am-comment-meta">--}}
                  {{--<a href="#link-to-user" class="am-comment-author">某人</a> 评论于 <time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2014-7-12 15:30</time>--}}
                {{--</div>--}}
              {{--</header>--}}
              {{--<div class="am-comment-bd">--}}
                {{--<p>《永远的蝴蝶》一文，还吸收散文特长，多采用第一人称，淡化情节，体现一种思想寄托和艺术追求。</p>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</li>--}}
          {{----}}
        {{--</ul>--}}
        <!-- 评论 end -->
      </div>
    </div>
  </div>
  
</div>

@endsection
