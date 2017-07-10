<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>个人网站后台管理</title>
  <base href="<?php echo site_url();?>"/>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
  <script src="assets/js/jquery-1.9.1.min.js"></script>
  <!--[if lt IE 9]>
  <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
  <script src="assets/js/amazeui.ie8polyfill.min.js"></script>
  <![endif]-->

  <!--[if (gte IE 9)|!(IE)]><!-->
  <script src="assets/js/jquery.min.js"></script>
  <!--<![endif]-->
  <script src="assets/js/amazeui.min.js"></script>
  <script src="assets/js/app.js"></script>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <strong>李智想</strong> <small>网站后台管理</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">0</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="admin/index"><span class="am-icon-sign-out"></span>首页</a></li>
       <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 后台数据管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
            <li><a href="admin/list_blog" class="am-cf"><span class="am-icon-check"></span>博客管理<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
            </span></a></li>
            <li><a href="admin/list_comment"><span class="am-icon-calendar"></span> 留言管理</a></li>
          </ul>
        </li>
      <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 个人信息管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
            <li><a href="admin/admin_me" class="am-cf"><span class="am-icon-check"></span>修改自我介绍<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
            </span></a></li>
            <li><a href="admin/Toadd_blog"><span class="am-icon-calendar"></span>发表文章</a></li>
          </ul>
      </li>

        <li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>
        <li><a href="admin-log.html"><span class="am-icon-calendar"></span> 系统日志</a></li>
        <li><a href="admin-404.html"><span class="am-icon-bug"></span> 404</a></li>

      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> wiki</p>
          <p>Welcome to the LZX ZONE wiki!</p>
        </div>
      </div>
    </div>
  </div>
<!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">留言汇总</strong> / <small>Table</small></div>
      </div>

      <hr>

      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
              <!-- <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button> -->
          </div>
        </div>
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-form-group">
            <select data-am-selected="{btnSize: 'sm'}">
              <option value="option1">按条件查找留言</option>
              <option value="option2">ID</option>
              <option value="option3">Email</option>
              <option value="option3">留言人</option>
              <!-- <option value="option3">只能手机</option>
              <option value="option3">超极本</option> -->
            </select>
          </div>
        </div>
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
          </div>
        </div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table id="comment-list" class=am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-id">ID</th>
                <th class="table-title">留言人</th>
                <th class="table-author am-hide-sm-only">邮箱</th>
                <th class="table-date am-hide-sm-only">留言日期</th>
                <th class="table-date am-hide-sm-only">留言内容</th>
                <th class="table-date am-hide-sm-only">联系方式</th>
                <th class="table-set">操作</th>
              </tr>
              </thead>
              <tbody id="commentlist">
                  <?php
                  foreach ($comments as $comment) {
                  ?>
                  <tr class="morecomment">
                    <td><?php echo $comment -> COMMENT_ID;?></td>
                    <td><?php echo $comment -> NAME;?></td>
                    <td><?php echo $comment -> EMAIL;?></td>
                    <td class="am-hide-sm-only"><?php echo $comment -> ADD_TIME;?></td>
                    <th class="table-date am-hide-sm-only"><?php echo $comment -> MESSAGE;?></th>
                    <td class="am-hide-sm-only"><?php echo $comment -> PHONENUMBER;?></td>
                    <td>
                      <div class="am-btn-toolbar">
                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                          <span class="am-icon-trash-o"></span>
                          <a href="javascript:;" class="del" data-id="<?php echo $comment -> COMMENT_ID;?>">删除</a>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
              </tbody>
          </table>
            <div class="am-cf">
            <!-- 共<?php echo count($comments);?>条记录 -->
            <div class="am-fr">
              <ul class="am-pagination">
                 <!--  <li class="am-disabled"><a href="#">«</a></li> -->
                  <!-- <li class="am-active" id="morecomment"><button class="am-active" id="morecomment">查看更多评论</button></li> -->
                 <!--  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">»</a></li> -->
              </ul>
            </div>
          </div>
            <hr />
            <p>不忘初心 方得始终</p>
          </form>
          <button class="am-active" id="morecomment">查看更多评论</button>
        </div>

      </div>
    </div>

<script type="text/javascript">
  $(function(){    
    $('.del').click(function(){
      var del = this;
      $.get('admin/remove', {
        commentid: $(this).data('id') 
      }, function(data){
        if(data == 'success'){
          $(del).parents('.morecomment').fadeOut(function(){
            $(this).remove();
            alert('删除成功');
            location.reload();
          });
        }
      }, "text");
    });
    
  });
</script>
<script type="text/javascript">
  $(function(){
    var ioffset = 0;
    var $commentlist = $('#commentlist');   
    $('#morecomment').on('click',function(){
        var that = this;
        $(this).hide();
        setTimeout(function(){
          $.get('admin/get_more',{offset: ioffset+=100},function(data){
            var html = '';
            console.log(html);
            for(var i=0; i<data.length; i++){
            var comment = data[i];
            html +='<tr class="morecomment">' + '<td>' + comment.COMMENT_ID+ '</td>' + '<td>'+comment.NAME+ '</td>' + '<td>'+comment.EMAIL+'</td>'+'<td class="am-hide-sm-only">' +comment.ADD_TIME+ '</td>'+ '<th class="table-date am-hide-sm-only">'+comment.MESSAGE+'</th>' + '<td>' + '<div class="am-btn-toolbar">' + '<button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">' + '<span class="am-icon-trash-o">' + '<span>' + '<a href="javascript:;" class="del" data-id="comment.COMMENT_ID">'+'删除'+ '</a>';
            html += '</button>'+'</div>' +'</td>' +'</tr>';
          }s
          $commentlist.append(html);
          $(that).show();
        },'json');
      }, 2000);
      
    }); 
  });
</script>










    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2016 AllMobilize, Inc. Licensed under MIT license.</p>
    </footer>

  </div>
  <!-- content end -->
</div>