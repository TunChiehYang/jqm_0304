<?php
	if(isset($_POST["id"])){
		if(trim($_POST["id"])!=""){
			$id=$_POST["id"];

			$server="localhost";
			$username="sa";
			$password="hao123";
			$dbname="product";

			$conn=mysqli_connect($server,$username,$password,$dbname);  

			if(!$conn){
				die("連線失敗".mysqli_connect_error());
			}

			$sql="DELETE FROM product_item WHERE ID='$id'";
			if(mysqli_query($conn,$sql)&& mysqli_affected_rows($conn)==1){   //mysqli_affected_rows 受影響筆數
				echo '{"status":true,"message":"刪除成功！"}';
			}else{
				echo '{"status":false,"message":"~~~~~~刪除失敗~~~~~"}' ;
			}
			mysqli_close($conn);

		}else{
			echo '{"status":false,"message":"輸入資料為空白，請重新輸入！！"}';
		}
	
	}else{
		echo '{"status":false,"message":"不允許未定義欄位"}' ;
	}


	

?>