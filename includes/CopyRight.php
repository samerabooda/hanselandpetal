
<?php

function Copyright($startYear){
	$currentYear = date('Y');
	if($startYear > $currentYear){
		$currentYear = date('y');
		return "$startYear&ndash;$currentYear";
	}else{
		return "$startYear";
	}
}








?>