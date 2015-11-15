<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Blog | Amaze UI Example</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
    @media only screen and (min-width: 1200px) {
      .blog-g-fixed {
        max-width: 1200px;
      }
    }

    @media only screen and (min-width: 641px) {
      .blog-sidebar {
        font-size: 1.4rem;
      }
    }

    .blog-main {
      padding: 20px 0;
    }

    .blog-title {
      margin: 10px 0 20px 0;
    }

    .blog-meta {
      font-size: 14px;
      margin: 10px 0 20px 0;
      color: #222;
    }

    .blog-meta a {
      color: #27ae60;
    }

    .blog-pagination a {
      font-size: 1.4rem;
    }

    .blog-team li {
      padding: 4px;
    }

    .blog-team img {
      margin-bottom: 0;
    }

    .blog-content img,
    .blog-team img {
      max-width: 100%;
      height: auto;
    }

    .blog-footer {
      padding: 10px 0;
      text-align: center;
    }
  </style>
</head>
<body>
<header class="am-topbar">
  <h1 class="am-topbar-brand">
    <a href="#">blog</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li class="am-active"><a href="#">首页</a></li>
      <!-- 栏目标题 start -->
      <li><a href="#">项目</a></li>
      <li><a href="#">项目</a></li>
      <li><a href="#">项目</a></li>
      <!-- 栏目标题 end -->
    </ul>

      <!-- 搜索框 start -->
    <form class="am-topbar-form am-topbar-left am-form-inline am-topbar-right" role="search" onsubmit="return dispatch()">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="搜索文章" id="q">
      </div>
      <button type="submit" class="am-btn am-btn-default am-btn-sm">搜索</button>
    </form>
      <!-- 搜索框 end -->
  </div>
</header>

<div class="am-g am-g-fixed blog-g-fixed">
  <div class="am-u-md-8">

    <!-- 文章简述 start-->
    <article class="blog-main">
      <h3 class="am-article-title blog-title">
        <a href="#">标题</a>
      </h3>
      
      <h4 class="am-article-meta blog-meta">by <a href="">作者</a> posted on 2014/06/17 under <a href="#">标签</a></h4>

      
      <div class="am-g">
        <div class="am-u-sm-12">
          <p>文章描述</p>
        </div>
      </div>
    </article>
    <!-- 文章简述 end -->
    <hr class="am-article-divider blog-hr">

    <!-- 文章简述 start-->
    <article class="blog-main">
      <h3 class="am-article-title blog-title">
        <a href="#">标题</a>
      </h3>
      <h4 class="am-article-meta blog-meta">by <a href="">作者</a> posted on 2014/06/17 under <a href="#">标签</a></h4>

      
      <div class="am-g">
        <div class="am-u-sm-12">
          <p>文章描述</p>
        </div>
      </div>
    </article>
    
    <hr class="am-article-divider blog-hr">   
    <!-- 文章简述 end -->
    

    <!-- 分页 start-->
    <ul class="am-pagination blog-pagination">
      <li class="am-pagination-prev"><a href="">&laquo; 上一页</a></li>
      <li class="am-pagination-next"><a href="">下一页 &raquo;</a></li>
    </ul>
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

<footer class="blog-footer">
  <p>MangleBlog<br/>
    <small>© Copyright <a href="http://www.baidu.com">yzis.me</a></small>
  </p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/yzisme.js"></script>

</body>
</html>
