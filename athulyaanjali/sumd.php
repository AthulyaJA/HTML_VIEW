<?php
$n=123;
$sum=0;
for($i=0;$i<=strlen($n);$n++)
{
  $rem=$n%10;
  $sum=$sum+$rem;
  $n=$n/10;
  }
  echo "the sum of $n =" .$sum;
  ?>