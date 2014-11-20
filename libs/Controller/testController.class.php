<?php
	class testController{
		function index(){
		 VIEW::assign(array('title'=>'快乐的一天', 'author'=>'开心的一天'));
			VIEW::display('admin/test.html');
		}
	}
?>