<?php /* Smarty version Smarty-3.1.16, created on 2014-11-18 06:12:51
         compiled from ".\tpl\JqM.html" */ ?>
<?php /*%%SmartyHeaderCode:180645465b1be129564-66730562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88bf9f429da04ede9b4dd03462d2a80ec03c246f' => 
    array (
      0 => '.\\tpl\\JqM.html',
      1 => 1416291169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180645465b1be129564-66730562',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5465b1be18f4c4_67850511',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5465b1be18f4c4_67850511')) {function content_5465b1be18f4c4_67850511($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
$(document).ready(function(){
  $("#qqq").click(function(){
//    $('p').load('dd');
  })
});
$(document).on("pagebeforeshow","#index1",function(){
	alert("欢迎回来");
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
<script>
//    $(document).on("pageshow","#index2",function(){
$(document).ready(function() {
//    $("#query").on("click",function(){
////            alert($("#search").val());
//            $.ajax({
//                //注意！下面这四个代表一个完整流程缺一不可
//                url: 'index.php?controller=q', //链接处理函数
//                type: 'post', //意味着提交方式为post
//                data: $("#search").val(),
//                //dataType: 'json', //意味着返回类型是json
//                success: function(json){
////                    for (var i = 0; i < data.length; i++) {
////                        alert(json[i]);
////                    }
////                    alert("dd");
//                    $("#p").innerText();
////                if(json['error']['balance_use']){
////                    $('#payment-method .checkout-content').prepend('<div class="warning" style="display: none;">' + json['error']['balance_use'] + '<img src="themes/default/image/close.png" alt="" class="close" /></div>');
////                    $('#payment-method .warning').fadeIn('slow');
////                }
////                else{
////
////                }
//                }
//            })
//        });
alert('ddd');
    });

</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#qqq").click(function(){
//    $(p).load('dd');
      alert("dd");
  })
})
// $(document).on("pageshow","#index1",function(){
// 	alert("欢迎回来");
// 	$("#qqq").on("click",function(){
// 	// $.get('http://300report.jumpw.com/api/getrole?name=dd',function(response){
//  //  document.body.innerHTML = response;
//  alert("dd0");
// })
// });
// 	});

</script>

<body>
<div data-role="page" id="index1">
<div data-role="header" data-position="fixed">
<!-- <img align="middle" src="fate.ico"/> -->
<a href="index.php?controller=admin&method=login" target="_blank" class="ui-btn ui-btn-a ui-corner-all ui-shadow">进入后台</a>
<p align="middle">wapApp by D.Y</p>	
</div>
    <div data-role="navbar">
        <ul>
            <li><a href="#" data-icon="home">首页</a></li>
            <li><a href="#" data-icon="arrow-r">页面二</a></li>
            <li><a href="#" data-icon="search">搜索</a></li>
        </ul>
    </div>
<div role="main" class="ui-content">
<p>Hello,may I help you</p>
<button  id="qqq">按钮1</button>
<a href="" class="ui-btn ui-btn-a ui-corner-all ui-shadow">按钮2</a>
<p></p>
<a href="#index2" data-transition="slide">进入</a>
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
	<!--<form id="form1" name="form1" method="post" action="index.php?controller=index&method=q"> &lt;!&ndash;action="index.php?controller=q"&ndash;&gt;-->
<!--<input type='text' name='name' id="name"><button class = 'ui-btn ui-btn-b ui-corner-all ui-shadow' id="query" type="submit">查询</button> </input>-->
<!--</form>-->

    <form method="post" action="index.php?controller=index&method=q" target="_blank">
        <div data-role="fieldcontain">
            <label for="search">用户名：</label>
            <input type="search" name="name" id="search" placeholder="完整的ID...">
        </div>
        <input type="submit" data-inline="true" value="查询" id="query">
    </form>
    <a href="#index1" data-transition="slidedown">返回</a>
    <!--<div data-role="fieldcontain">-->
        <!--<p></p>-->
<!--</div>-->
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
