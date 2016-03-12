<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php echo ($title); ?></title>
  <link rel="stylesheet" href="/tp_ask/Public/css/bootstrap.css" />
  <link rel="stylesheet" href="/tp_ask/Public/css/bootstrap-table.css" />
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
  <form action="javascript:void(0)" method="POST" name="form">
    <div class="question_box">
      <div class="content">
        <div>
          <input type="button" id="next" name="next" value="查看症状" class="btn"/>
          <input type="hidden" name="id" id="id" value=""/>
          <input type="hidden" name="type" id="type" value="class"/>
          <input type="button" name="show_answer" value="诊断用药" class="btn"/>
        </div>
      </div>
    </div>
  </form>
  <div class="line"></div>
  <div id="title"> - </div>
  <div class="line"></div>
  <div  id="answer"></div>
  <div class="line"></div>
</div>