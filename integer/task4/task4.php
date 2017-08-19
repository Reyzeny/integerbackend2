<?php
function check_prime($val){
	if(!is_numeric($val)){
		return "The value you entered is not a number";
	}

	$report = "";

	for($i=2;$i<$val;$i++){
		if($val % $i == 0){
			$report = "$val is not a prime number";
			break;
		}else{
			$report = "$val is a prime number";
		}
	}

	return $report;
}

?>