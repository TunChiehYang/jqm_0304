<?php
	if(isset($_POST["id"]) && isset($_POST["price"]) && isset($_POST["qty"])){
		
		if(trim($_POST["id"])!=""&& trim($_POST["price"])!="" && trim($_POST["qty"])!=""){
			$id=$_POST["id"];
			$price=$_POST["price"];
			$qty=$_POST["qty"];
			$server="localhost";
			$username="sa";
			$password="hao123";
			$dbname="product";
			$conn=mysqli_connect($server,$username,$password,$dbname); 
			if(!$conn){
				die("連線失敗".mysqli_connect_error());
			}

			
			// 设置编码，防止中文乱码
			mysqli_query($conn , "set names utf8");
			$sql="UPDATE product_item SET Price='$price',Qty='$qty'  WHERE ID='$id'";
			if(mysqli_query($conn,$sql)&& mysqli_affected_rows($conn)==1){   //mysqli_affected_rows 受影響筆數
					echo '{"status":true,"message":"更新成功！"}';
				}else{
					echo '{"status":false,"message":"~~~~~~更新失敗~~~~~"}' ;
				}
			mysqli_close($conn);
		}else{
			echo '{"status":false,"message":"輸入資料為空白，請重新輸入"}' ;
		}
	}else{
			echo '{"status":false,"message":"不允許未定義欄位"}' ;
	}
?>