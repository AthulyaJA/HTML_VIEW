<html>
<head>
<title>prime or not</title>
</head>
<body>
<h2 style="color:green">PRIME OR NOT</h2>
<?php
$n=4;
$a=0;

for($i=2;$i<=$n/2;$i++)
  {
	if(($n%$i==0))
		
		$a++;
		break;
  } 
	
if(($a==0))
    
	echo  "$n is a prime number";
	
 else
 
 echo " $n not a prime";
 
?>
 </body>
 </html>