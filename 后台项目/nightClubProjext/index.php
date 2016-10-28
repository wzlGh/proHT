 <?php
 //引入外部文件
 include 'content.php';
 ?>
<?php
header("Content-type:text/html;charset=utf-8");
$v_uname=$_REQUEST["uname"];
$v_upwd=$_REQUEST["upwd"];
$sql="select * from yh where uname='$v_uname' and pwd='$v_upwd'";
$result=mysql_query($sql,$db_link);
//$v_result=mysql_fetch_row($result);
//if(!empty($v_result)){
//       echo "success";
//   }else{
//       echo "loser";
//   }
session_start();

if($v1=mysql_fetch_array($result)){
 //设置session
 $_SESSION['uname']=$v1['uname'];
  $_SESSION['bbid']=$v1['yhid'];
  echo 'success';
}else{
echo 'false';
}
?>