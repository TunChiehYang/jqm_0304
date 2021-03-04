<?php
header("Access-Control-Allow-Origin:*");
$heigth=$_POST["heigth"]/100;
$weigth=$_POST["weigth"];
$bmi=$weigth/($heigth*$heigth);
// echo $bmi;
if($bmi<18.5){
	echo "你的BMI:".$bmi." 體重過輕";
}
elseif(18.5<=$bmi and  $bmi<24){
	echo "你的BMI:".$bmi."健康體位";
}elseif(24<=$bmi and $bmi<27){

	echo "你的BMI:".$bmi."體位異常-過重";
}elseif(27<=$bmi and $bmi<30){

	echo "你的BMI:".$bmi."體位異常-輕度肥胖";
}elseif(30<=$bmi and $bmi<35){

	echo "你的BMI:".$bmi."體位異常-中度肥胖";
}elseif(35<=$bmi){

	echo "你的BMI:".$bmi."體位異常-重度肥胖";
}

?>