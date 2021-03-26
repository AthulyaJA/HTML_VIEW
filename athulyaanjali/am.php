<html>
<head>
<title>am</title>
</head>

<?php
  $n=1000;
  
  $sum=0;
  for($i=1;$i<=$n;$i++)
   {
    $r=$n%10;
	$sum=$sum+($r*$r*$r);
	$n=$n/10;
   }
   if($sum==$n)
   echo "the given number is amstrong";
   else
	 echo"not amstrong";
 
   ?>
   </body>
   </html>
	