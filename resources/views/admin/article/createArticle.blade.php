@extends('admin.public.main')
@section('css')
@parent
@stop
@section('content')
<div class="admin-content">

  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">发表文章</strong> / <small>form</small></div>
  </div>

  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">

      <li class="am-active"><a href="#tab2">详细描述</a></li>
      <li><a href="#tab3">SEO 选项</a></li>
    </ul>
    <form action="/admin/article" method="post" id="articleForm" class="am-form">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="am-tabs-bd">


      <div class="am-tab-panel am-fade am-in am-active" id="tab2">

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              标题
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" class="am-input-sm" name="title">
            </div>
            <div class="am-hide-sm-only am-u-md-6"></div>
          </div>

          <div class="am-g am-margin-top">
              <div class="am-u-sm-4 am-u-md-2 am-text-right">类别</div>
              <div class="am-u-sm-8 am-u-md-10">
                  <select data-am-selected="{btnSize: 'sm'}" name="category">

                      @foreach ($category as $k=>$v)
                          <option value="{{$v->id}}">{{$v->name}}</option>
                      @endforeach
                  </select>
              </div>
          </div>



          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              摘要
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" class="am-input-sm" name="abstract">
            </div>
            <div class="am-u-sm-12 am-u-md-6"></div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              正文
            </div>
            <div class="am-u-sm-12 am-u-md-10">
              <textarea rows="10" id="editor" name="content"></textarea>
            </div>
          </div>


      </div>

      <div class="am-tab-panel am-fade" id="tab3">

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 标题
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" class="am-input-sm" name="ed">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 关键字
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" class="am-input-sm">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 描述
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <textarea rows="4"></textarea>
            </div>
          </div>

      </div>

    </div>
    </from>
  </div>

  <div class="am-margin">
    <button type="button" class="am-btn am-btn-primary am-btn-xs" id="submitArticleForm">提交保存</button>
    <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
  </div>
</div>
@stop


@section('scriptResource')
@parent
    <script type="text/javascript" charset="utf-8" src="/ue/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ue/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/ue/lang/zh-cn/zh-cn.js"></script>

@stop

@section('script')
    <script type="text/javascript">
         var ue = UE.getEditor('editor');

         $('#submitArticleForm').click(function(){

            $('#articleForm').submit();
         });
    </script>
@stop