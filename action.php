<?php

//session_unset($_SESSION['id']);
//session_destroy();
//echo $_SESSION['id'];

session_start();
//$_SESSION['id']=NaN;

if(isset($_POST['msg'])){
  //画图过程每一笔 传来一个msg参数，更新最新的图片，session里的id一直在增加；
    $_SESSION['subtitle'] = $_POST['msg'];
	$_SESSION['id']++;
	
}else{
   //每个1s扫描一次msgid的值是不是最新的，也即是否与session['id']一样，
   //页面头一次刷新时，$_POST['id']是1， $_SESSION['id']存储上一次的值，因此会保留刷新前的图片；
  if(isset($_SESSION['id']))
      {  if($_POST['id'] < $_SESSION['id'])
              {  echo $_SESSION['id']."|".$_SESSION['subtitle'];
               }
        }
	else 
	{
	    $_SESSION['id']=$_POST['id']; 
           echo $_SESSION['id'];		
	
	    }
} 
?>