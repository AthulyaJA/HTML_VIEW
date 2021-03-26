<html>
<head>
<title>SWAP</title>
</head>
<body>
 <h1 style="color:red"><u>SWAP</u></h1>
 
<?php
$a=1;
$b=2;

 echo"swap start................";
 echo "<br>The number before swapping is:";
  echo "Number a =".$a." and b=".$b;
 

  $temp=$a;
  $a=$b;
  $b=$temp;
  
  
  echo "<br>The number after swapping is: ";
  
  echo " Number a =".$a." and b=".$b."\n";
  ?>
	
</body>
</html>