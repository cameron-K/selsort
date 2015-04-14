<?php
	$ar=array();
	for($i=0;$i<100;$i++){
		array_push($ar, rand(1,10000));
	}

	var_dump(selsort($ar));
	function selsort($ar){
		$start=microtime(true);
		for($i=0;$i<count($ar);$i++){
			$mi=$i;
			$ma=count($ar)-1;
			for($j=$i+1;$j<count($ar);$j++){
				if($ar[$j]<$ar[$mi]){
					$mi=$j;
				}
				if($ar[$j]>$ar[$ma]){
					$ma=$j;
				}
			}
			if($mi!==$i){
				$temp=$ar[$mi];
				$ar[$mi]=$ar[$i];
				$ar[$i]=$temp;
			}
			if($ma!==count($ar)){
				$temp=$ar[$ma];
				$ar[$ma]=$ar[count($ar)-1];
				$ar[count($ar)-1]=$temp;
			}
		}
		$end=microtime(true);
		$time=($end-$start)*1000;
		echo "Time: $time milliseconds";
		return $ar;
	}

?>