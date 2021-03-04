<?php

	header("Access-Control-Allow-Origin:*");
	$server="localhost";
	$username="sa";
	$password="hao123";
	$dbname="product";
	$name=trim($_POST["name"]);
	$conn=mysqli_connect($server,$username,$password,$dbname);
	if (!$conn) {
	  die("Connection failed:".mysqli_connect_error());
	}
	// echo $pname;
	$sql = "SELECT ID,Name,Price,Qty,Created_at FROM product_item WHERE Name='$name'";
	$result = mysqli_query($conn, $sql);
	echo mysqli_num_rows($result);
	if (mysqli_num_rows($result) >=1) {
		  echo '{"status":false,"message":"資料庫已經有資料"}';
		} else {
		  echo '{"status":true,"message":"可以新增"}';
		}

	mysqli_close($conn);

?>