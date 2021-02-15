<?php
$arr = array();
for($i = 1; $i <= 10; $i++){
	$arr[$i] = $i**2;
}

$arr[12] = FALSE;

foreach($arr as $key => $value){
	echo $key." ".$value;
	echo "<br>";
}
?>