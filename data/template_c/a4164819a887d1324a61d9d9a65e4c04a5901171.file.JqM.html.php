<?php /* Smarty version Smarty-3.1.16, created on 2014-11-14 07:12:46
         compiled from ".\tpl\admin\JqM.html" */ ?>
<?php /*%%SmartyHeaderCode:21757543fb6d6bdd201-02310741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4164819a887d1324a61d9d9a65e4c04a5901171' => 
    array (
      0 => '.\\tpl\\admin\\JqM.html',
      1 => 1415949164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21757543fb6d6bdd201-02310741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_543fb6d6c4ca84_08659161',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543fb6d6c4ca84_08659161')) {function content_543fb6d6c4ca84_08659161($_smarty_tpl) {?><!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>泽田悠二</title> 	
<link rel="shortcut icon" href="fate.ico">
<!-- <link rel="apple-touch-icon" href="fate.ico" /> -->
<link rel="apple-touch-icon-precomposed" href="fate.ico" /> 
<link rel="stylesheet" href="css/jquery.mobile-1.4.4.min.css"/>
<script src="js/jquery.js"></script>
<script src="js/jquery.mobile-1.4.4.min.js"></script>
<script>
$(document).on("pagebeforeshow","#index1",function(){
	alert("欢迎");
	});
// $(document).on("pagebeforehide","#index1",function(){
// 	alert("page1beforehide");
// 	});
// $(document).on("pagehide","#index1",function(){
// 	alert("page1hide");
// 	});
// $(document).on("pagebeforeshow","#index2",function(){
// 	alert("page2beforeshow");
// 	});
// $(document).on("pageshow","#index2",function(){
// 	alert("page2show");
// 	});
</script>
</head>
<body>
<div data-role="page" id="index1">
<div data-role="header" data-position="fixed">
	<img src="fate.ico"/>
<p aligment="middle">我是标题ha</p>	
</div>
<div role="main" class="ui-content">
<p>我是内容1</p>
<a href="" class="ui-btn ui-btn-a ui-corner-all ui-shadow">按钮1</a>
<a href="" class="ui-btn ui-btn-b ui-corner-all ui-shadow">按钮2</a>
<p><a href="#index2" data-transition="slide">进入</a></p>
</div>
<div data-role="footer" data-position="fixed" >
	<div data-role="navbar">
		<ul>
			<li><a href="" data-icon="bars">一</a></li>
			<li><a href="" data-icon="star">二</a></li>
			<li><a href="" data-icon="gear">三</a></li>
		</ul>
	</div>
</div>

</div>
<div data-role="page" id="index2">

<div data-role="header" class="header">
<p align='middle' class="ui-letter">战绩查询</p>	
</div>
<div role="main" class="ui-content">
<p><input type='text' ><button class = 'ui-btn ui-btn-b ui-corner-all ui-shadow'>查询</button> </input></p>
<p><a href="#index1" data-transition="slidedown">返回</a></p>
</div>
<div data-role="footer" data-position="fixed" >
	<div data-role="navbar">
		<ul>
			<li><a href="" data-icon="bars">一</a></li>
			<li><a href="#index1" data-icon="home">二</a></li>
			<li><a href="" data-icon="gear">三</a></li>
		</ul>
	</div>
</div>

</div>


</body>
</html>
<?php }} ?>
