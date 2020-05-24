<?php

function multiple($x, $y)
{     
    $number = $x*$y;           
    while ($number > 0) 
    {
    $array[] = $number % 10;
    $number = intval($number / 10); 
    }
    
    $array = array_reverse($array);
   
   foreach($array as $num)
   if(isset($num))
   {
     echo "<span class = ".color($num).">".$num."</span>";
   }
   
}
                 