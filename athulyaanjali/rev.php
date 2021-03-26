<?php
 $n=5678;
 $rev=0;
 $rem=0;
   echo "the number before reversing= ".$n;
 for($i=1;$i<$n;$i++)
  {
  $rem=$n%10;
  $rev=($rev*10)+$rem;
  $n=$n/10;
  }

  echo"<br>";
  echo"revred number = ".$rev;
  ?>
  