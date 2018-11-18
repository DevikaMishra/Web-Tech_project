<?php


	extract($_GET);
	$retarr=array();
	if($fname=="Data Structures"){
		
		$retarr["cs"]="UE15CS202";
		
	}
	elseif($fname=="Introduction to Data Science"){
		
		$retarr["cs"]="UE15CS201";
		
	}
	elseif($fname=="Digital Design and Computer Organization"){
		
		$retarr["cs"]="UE15CS203";
			
	}
	elseif($fname=="Web Technologies-1"){
		
		$retarr["cs"]="UE15CS204";
		
	}
	elseif($fname=="Theory of Computation"){
		
		$retarr["cs"]="UE15CS255";
		
	}
	elseif($fname=="Linear Algebra"){
		
		$retarr["cs"]="UE15CS251";
			
	}
	elseif($fname=="Design and Analysis of Algorithms"){
		
		$retarr["cs"]="UE15CS252";
		
	}
	elseif($fname=="Database Management System"){
		
		$retarr["cs"]="UE15CS253";
		
	}
	elseif($fname=="Microprocessor and Computer Architecture"){
		
		$retarr["cs"]="UE15CS254";
			
	}
	elseif($fname=="Computer Networks"){
		
		$retarr["cs"]="UE15CS301";
		
	}
	elseif($fname=="Operating Systems"){
		
		$retarr["cs"]="UE15CS302";
		
	}
	elseif($fname=="Principles of Programming Languages"){
		
		$retarr["cs"]="UE15CS303";
			
	}
	elseif($fname=="Compiler Design"){
		
		$retarr["cs"]="UE15CS351";
		
	}
	elseif($fname=="Machine Learning"){
		
		$retarr["cs"]="UE15CS353";
		
	}
	elseif($fname=="Unix System Programming"){
		
		$retarr["cs"]="UE15CS352";
			
	}
	elseif($fname=="Web Technologies-2"){
		
		$retarr["cs"]="UE15CS403";
		
	}
	elseif($fname=="Object Oriented Modelling and Design"){
		
		$retarr["cs"]="UE15CS401";
		
	}
	elseif($fname=="Wireless Systems"){
		
		$retarr["cs"]="UE15CS420";
		
	}
	elseif($fname=="Social Network Analysis"){
		
		$retarr["cs"]="UE15CS424";
		
	}
	
	$ret=json_encode($retarr);
	echo $ret;
	




?>