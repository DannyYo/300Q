<?php
// 启动引擎程序
	$currentdir = dirname(__FILE__);//当前框架的目录地址
	include_once($currentdir.'/include.list.php');//引入清单
	foreach($paths as $path){
		include_once($currentdir.'/'.$path);
	}
	class PC{
		public static $controller;
		public static $method;
		private static $config;
		private static function init_db(){
			DB::init('mysql', self::$config['dbconfig']);//初始化db引擎，最好不要写死
		}
		private static function init_view(){
			VIEW::init('Smarty', self::$config['viewconfig']);//初始化视图引擎
		}
		private static function init_controllor(){
			self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'index';//初始化控制器
		}
		private static function init_method(){
			self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';//初始化方法
		}
		public static function run($config){
			self::$config = $config;
			self::init_db();
			self::init_view();
			self::init_controllor();
			self::init_method();
			C(self::$controller, self::$method);
		}
	}
?>