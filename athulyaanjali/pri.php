<?php  
$a = 0;  
$num = 2;  

for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$count++;  
}  
}  
if ($count<3)  
{  
echo $num." , ";  
$a=$a+1;  
}  
$num=$num+1;  
  
?>