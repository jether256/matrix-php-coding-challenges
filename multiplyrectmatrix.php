<?php

/*multiply a rectangular matrix*/

function multiply($m1, $m2, $mat1, $n1, $n2, $mat2){
                      
       for($i=0;$i<$m1;$i++){
           
           for($j=0;$j<$n2;$j++){
               
               $res[$i][$j]=0;
               
               for($k=0;$k<$m2;$k++){
                   
                   $res[$i][$j] +=$mat1[$i][$k] * $mat2[$k][$j];
               }
               
           }
           
       }
       
       
       
       for($i=0;$i<$m1;$i++){
           
           for($j=0;$j<$n2;$j++){
               
               echo $res[$i][$j]." ";
           }
           
           echo (" 
  ");         
       }
}


// Driver code 
$mat1 = array( array( 2, 4 ), array( 3, 4 )); 
$mat2 = array( array( 1, 2 ), array( 1, 3 )); 
$m1 = 2;
$m2 = 2;
$n1 = 2;
$n2 = 2; 
  
//Function call
multiply($m1, $m2, $mat1, $n1, $n2, $mat2);          


?>