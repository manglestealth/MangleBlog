@extends('blog.public.main')

@section('content')

<div class="am-g am-g-fixed blog-g-fixed">
  <div class="am-u-md-8">

    @foreach($articleList as $article)
    <!-- 文章简述 start-->
    <article class="blog-main">
      <h3 class="am-article-title blog-title">
        <a href="/post/{{$article->id}}">{{$article->title}}</a>
      </h3>
      
      <h4 class="am-article-meta blog-meta"> posted on {{$article->time}} under <a href="#">{{$categories[($article->category)-1]->name}}</a></h4>

      
      <div class="am-g">
        <div class="am-u-sm-12">
          <p>{{$article->abstract}}</p>
        </div>
      </div>
    </article>
    <!-- 文章简述 end -->
    @endforeach
    


          {!! $articleList->render() !!}
    <!-- 分页 end-->
  </div>

  <div class="am-u-md-4 blog-sidebar">
    <div class="am-panel-group">
      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">关于我</div>
        <div class="am-panel-bd">
          <p>anymore</p>
          
        </div>
      </section>
      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">推荐文章</div>
        <ul class="am-list blog-list">
          <!-- 推荐文章 start -->
          <li><a href="#">Google fonts 的字體（sans-serif 篇）</a></li>
          <!-- 推荐文章 end -->
        </ul>
      </section>

      
    </div>
  </div>

</div>

@endsection
