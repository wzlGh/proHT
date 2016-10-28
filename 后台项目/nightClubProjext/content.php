<?php
$db_link=mysql_connect("localhost","root","19950703")or die("数据库服务器连接失败！".mysql_error());
$db=mysql_select_db("prog",$db_link)or die("数据库连接失败！".mysql_error());
?>