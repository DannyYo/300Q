<?php
// �����������
	$currentdir = dirname(__FILE__);//��ǰ��ܵ�Ŀ¼��ַ
	include_once($currentdir.'/include.list.php');//�����嵥
	foreach($paths as $path){
		include_once($currentdir.'/'.$path);
	}
	class PC{
		public static $controller;
		public static $method;
		private static $config;
		private static function init_db(){
			DB::init('mysql', self::$config['dbconfig']);//��ʼ��db���棬��ò�Ҫд��
		}
		private static function init_view(){
			VIEW::init('Smarty', self::$config['viewconfig']);//��ʼ����ͼ����
		}
		private static function init_controllor(){
			self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'index';//��ʼ��������
		}
		private static function init_method(){
			self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';//��ʼ������
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