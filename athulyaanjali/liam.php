<?php
  $n=1000;
   $p=0;
  
  for($i=1;$i<=$n;$i++)
	  $p=$i;
      $sum=0;
	  while(p!==0)
   {
    $r=$n%10;
	$sum=$sum+($r*$r*$r);
	$n=$n/10;
   }
   if($sum==$i)
   {
    echo "the amstrong numbers are $i ";
   }
	?>