<?php
$server="localhost";
$username="sa";
$password="hao123";
//建立連線
$conn=mysqli_connect($server,$username,$password);
//測試連線
if(!$conn){
	die("出錯啦！！".mysql_connect_error());
}
echo "連線成功！！";
?> 