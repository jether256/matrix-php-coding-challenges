<?php

/*print a square matrix whose size is $n*/

$n=4;

$col;
$row;

for($row=0; $row< $n; $row++){

	for($col=0; $col <$n; $col++){

		if($row==$col){

			echo 1," ";
		}else{

			echo 0," ";
		}
	}

	echo "\n";
}

return 0;



?>