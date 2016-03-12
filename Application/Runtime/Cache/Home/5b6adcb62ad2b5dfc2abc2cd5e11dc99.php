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

<link rel="stylesheet" type="text/css" href="/tp_ask/Public/css/login.css" />
<div class="container">
  <form class="form-signin" action="<?php echo U('login/login');?>" method="POST" name="loginForm">
    <h2 class="form-signin-heading">登录</h2>
    <input name="user" type="text" class="input-block-level" placeholder="Email address">
    <input name="password" type="password" class="input-block-level" placeholder="Password">
    <label class="checkbox">
      <input type="checkbox" value="remember-me" name="remember"> 三天内自动登录
    </label>
    <input class="btn btn-large btn-primary" type="submit" value="登录"> 
    <a href="#">忘记密码</a>
  </form>
</div>