<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php echo ($title); ?></title>
  <link rel="stylesheet" href="/tp_ask/Public/css/bootstrap.css" />
  <link rel="stylesheet" href="/tp_ask/Public/css/bootstrap-table.css" />
  <link rel="stylesheet" href="/tp_ask/Public/css/main.css" />
  <script language="javascript" type="text/javascript" src="/tp_ask/Public/js/jquery-2.2.1.min.js"></script>
  <script language="javascript" type="text/javascript" src="/tp_ask/Public/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
  <a class="navbar-brand" href="#">ASK项目</a>
</div>
<div>
  <ul class="nav navbar-nav">
    <li <?php if($ctr == ''): ?>class="active"<?php endif; ?>><a href="<?php echo U('index/index');?>">首页</a></li>
    <li <?php if($ctr == 'Class'): ?>class="active"<?php endif; ?>><a href="<?php echo U('class/index');?>">按分类</a></li>
    <li <?php if($ctr == 'Tag'): ?>class="active"<?php endif; ?>><a href="<?php echo U('tag/index');?>">按标签</a></li>
    <li <?php if($ctr == 'History'): ?>class="active"<?php endif; ?>><a href="<?php echo U('history/index');?>">历史记录</a></li>
    <li <?php if($ctr == 'Figure'): ?>class="active"<?php endif; ?>><a href="<?php echo U('figure/index');?>">设置</a></li>
    <li><a href="<?php echo U('logout/index');?>">退出</a></li>
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      Java <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
      <li><a href="#">jmeter</a></li>
      <li><a href="#">EJB</a></li>
      <li><a href="#">Jasper Report</a></li>
      <li class="divider"></li>
      <li><a href="#">分离的链接</a></li>
      <li class="divider"></li>
      <li><a href="#">另一个分离的链接</a></li>
    </ul>
    </li>
  </ul>
</div>
<div>
  <ul class="nav pull-right">
    <li>
    <a href="#" >admin</a>
    </li>
  </ul>
</div>
</nav>

<div class="main">
  <div>
    <span name="user_figure_id" value="0" class="label label-info" /> 设置分类</span>
    <span name="user_figure_id" value="1" class="label label-warning" /> 设置标签</span>
    <!--<span class="label label-info">Info</span>-->
    <!--<span class="label label-warning">Warning</span>-->
    <a href="" class="return_pre">返回</a>
  </div>
  <div id="class_figure_box">
    <div class="welcome">
      请勾选一个或多个并保存设置。设置好了以后，请返回相应的类页面进行练习！
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">面板标题</h3>
      </div>
      <div class="panel-body">
        这是一个基本分类的面板
      </div>
    </div>
    <div class="box">
      <label><input type="checkbox" name="checkall" value="classlist"/> 全选</label>
      <input type="button" name="save_user_figure" list="classlist" value="保存" />
      您已选择：<span id="classlist_count">0</span> 个分类 ，可查看 <span id="classlist_ask">0</span> 个问题
    </div>
  </div>
  <div id="tag_figure_box" style="display:none">
    <div class="welcome">
      请勾选一个或多个并保存设置。设置好了以后，请返回相应的标签页面进行练习！
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">面板标题</h3>
      </div>
      <div class="panel-body">
        这是一个基本标签的面板
      </div>
    </div>
    <div class="box">
      <input type="button" name="save_user_figure" list="taglist" value="保存" />
      您可选择：<span id="taglist_count">0</span> 个标签，可查看 <span id="taglist_ask">0</span> 个问题
    </div>
  </div>
</div>
</body>
</html>
 <script language="javascript" type="text/javascript" src="/tp_ask/Public/Home/js/general.js"></script>