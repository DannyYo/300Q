<?php
    class indexController{
        public function index(){
            // VIEW::assign(array('title'=>'快乐的一天', 'author'=>'开心的一天'));
            VIEW::display('JqM.html');
        }
    public function q(){
            if(isset($_POST['name'])) $name =$_POST['name'];
            // else VIEW::assign($errMess,"积极");
            $url = 'http://300report.jumpw.com/api/getrole?name='.$name;
//            echo $url;
//            echo "name:".$_POST['name'];
//            die();
           
            $json = file_get_contents($url); $data = (array)(json_decode($json));//get_object_vars() == (array)
            
            
           $datas = array();
$result= $data['Result']; 
if($result=="OK"){
// $count= count($data['Role']);
// for($i= 0; $i< $count; $i++) { 
    $role = (array)$data['Role'];
$datas['RoleName']  = $role['RoleName']; 
$datas['RoleLevel'] = $role['RoleLevel']; 
$datas['JumpValue'] = $role['JumpValue']; 
$datas['WinCount'] = $role['WinCount']; 
$datas['UpdateTime']= $role['UpdateTime'];  
// }
// echo $datas['RoleLevel'];
// exit();
}else
$this->showmessage('没有查到相关资料！', 'index.php?controller=index&method=index#index2');

            VIEW::assign($datas);
//          //$this->showmessage('删除新闻成功！', 'index.php?controller=q');
            VIEW::display('result.html');
        }

        public function obj2array($data){
           $newArray=array();
           foreach($data as $key=>$value){   
              if(is_object($value)){
               $newArray[$key]=obj2array($value);
                    }else{
                  $newArray[$key]=$value;
                    }
                     }
                   return $newArray;
        }

        private function showmessage($info, $url){
            echo "<script>alert('$info');window.location.href='$url'</script>";
            exit;
        }
    }
?>