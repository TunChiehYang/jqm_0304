<?php
header("Access-Control-Allow-Origin:*");
$server="localhost";
$username="sa";
$password="hao123";
$dbname="product";

$conn=mysqli_connect($server,$username,$password,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM product_item ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);
$myArray=array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row 每一行的輸出。
  while($row = mysqli_fetch_assoc($result)) {
    $myArray[]=$row;
  }
  echo json_encode($myArray);
} else {
  echo "0 results";
}

mysqli_close($conn);

?>