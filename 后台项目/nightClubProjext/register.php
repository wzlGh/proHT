<?php
header("Content-type:text/html;charset=utf-8");
$v_name=$_REQUEST["name"];
$v_upwd=$_REQUEST["password"];
$v_tel=$_REQUEST["tel"];
$db_link=mysql_connect("localhost","root","19950703");
$db=mysql_select_db("prog",$db_link);
$sql="insert into yh(name,password,tel) values('$v_name','$v_upwd','v_tel')";
//设置数据库的字符集
mysql_query("SET NAMES UTF8");
$result=mysql_query($sql,$db_link);
if(!empty($result)){
    echo "注册成功！";
}else{
    echo "注册失败！";
}
?>