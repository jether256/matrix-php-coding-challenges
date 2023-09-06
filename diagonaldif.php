<?php
/*diagonal diffreence */
function difference($arr, $n)
{
     
   
    $d1 = 0; $d2 = 0;
 
    for ($i = 0; $i < $n; $i++)
    {
        for ($j = 0; $j < $n; $j++)
        {
             
           
            if ($i == $j)
                $d1 += $arr[$i][$j];
 
           
            if ($i == $n - $j - 1)
                $d2 += $arr[$i][$j];
        }
    }
 
  
    return abs($d1 - $d2);
}
 

{
    $n = 3;
 
    $arr = array(array(11, 2, 4),
                 array(4 , 5, 6),
                 array(10, 8, -12));
 
    echo difference($arr, $n);
    return 0;
}

 
?>