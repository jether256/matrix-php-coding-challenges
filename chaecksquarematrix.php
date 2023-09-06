<?php
 
 
 function isMat($mat,$n){
     
     for($row=0;$row < $n; $row++){
         
         for($col=0; $col < $n; $col++){
             
             if($row== $col && $mat[$row][$col] != 1){
                 
                 return false;
             }
             
             else if($row != $col && $mat[$row][$col] != 0){
                 
                 return false;
             }
         }
     }
     return true;
 }
 
 
 
  $n = 4;
    $mat = array(array(1, 0, 0, 0),
                 array(0, 1, 0, 0),
                 array(0, 0, 1, 0),
                 array(0, 0, 0, 1));
 
 if(isMat($mat,$n))
 echo "Yes";
 else
 echo "NO";
 

?