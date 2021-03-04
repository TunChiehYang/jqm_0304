<?php
	if(isset($_POST["name"])&&isset($_POST["price"])&&isset($_POST["qty"])){
		$p_name=$_POST["name"];
		$p_price=$_POST["price"];
		$p_qty=$_POST["qty"];
		if(trim($_POST["name"])!="" &&trim($_POST["price"])!="" &&trim($_POST["qty"])!="" ){
			$server="localhost";
			$username="sa";
			$password="hao123";
			$dbname="product";

			// Create connection
			$conn = mysqli_connect($server, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "INSERT INTO product_item (Name, Price, Qty) VALUES ('$p_name', '$p_price', '$p_qty')";
			
			if (mysqli_query($conn, $sql)) {
				  echo '{"status":true,"message":"新增成功"}';
				} else {
				  echo '{"status":false,"message":"新增失敗"}';
				}
				mysqli_close($conn);

			}else{
				echo '{"status":false,"message":"輸入資料為空白，請重新輸入！！"}';
			}

	}else{
		echo '{"status":false,"message":"不允許空白欄位"}' ;
	}

?>

