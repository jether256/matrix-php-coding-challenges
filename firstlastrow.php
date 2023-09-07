<?php

/*interchange first and last row */

function interchangeFirstLast(&$m){
    
    $n=4;
    
    for($i=0;$i<$n;$i++){
        
        $t=$m[0][$i];
        $m[0][$i]=$m[$n-1][$i];
        $m[$n-1][$i]=$t;
    }
}


$m = array(array(8, 9, 7, 6),
            array(4, 7, 6, 5),
            array( 3, 2, 1, 8),
            array(9, 9, 7, 7));
              
interchangeFirstLast($m);

$n=4;


for($i=0;$i<$n;$i++){
    
    for($j=0;$j<$n;$j++){
        
        echo $m[$i][$j]." ";
    }
    
    echo "
";
}
 
?>