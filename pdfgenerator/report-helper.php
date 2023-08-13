<?php
function to_whole_num($val) {
	return round($val * 100);
}
function val_class_range($val) {
	$res;

	$val = to_whole_num($val);
	if($val >= 76 and $val <= 100) {
		$res = "76-100";
	} else if($val >= 51 and $val <= 75) {
		$res = "51-75";
	} else if($val >= 26 and $val <= 50) {
		$res = "26-50";
	} else if($val >= 1 and $val <= 25) {
		$res = "1-25";
	} else {
		$res = "0";
	}

	return $res;
}
function getCapability($val) {
    $res;
    if($val >= .82) {
        $res = 5;
    } else if($val >= .62 && $val <= .81) {
        $res = 4;
    } else if($val >= .42 && $val <= .61) {
        $res = 3;
    } else if($val >= .22 && $val <= .41) {
        $res = 2;
    } else {
        $res = 1;
    }

    return $res;
}

?>