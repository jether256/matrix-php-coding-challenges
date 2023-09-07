<?php

function printDiagonalSums($a){
    
    $n=4;
    
    $main=0;
    $sec=0;
    
    for($i=0;$i<$n;$i++){
        
        for($j=0;$j<$n;$j++){
            
            if($i==$j){
                
                $main +=$a[$i][$j];
            }
            
            if(($i+$j)==($n-1)){
                $sec +=$a[$i][$j];
            }
        }
    }
    
        echo $main." \n".$sec;
}


$a = array (array ( 1, 2, 3, 4 ),
            array ( 5, 6, 7, 8 ),
            array ( 1, 2, 3, 4 ),
            array ( 5, 6, 7, 8 ));
printDiagonalSums($a);
?>