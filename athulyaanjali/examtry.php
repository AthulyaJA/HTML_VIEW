
 <?php
		
/*for($i=0;$i<=5;$i++)
{  
for($j=5-$i;$j>=1;$j--)
{  
echo "* ";  
}  
echo "<br>"; 

 
} */



/*for($i=1;$i<5;$i++)
{	
for($j=0;$j<=$i;$j++)
		{
		echo "* ";
		}
for($j=5;$j>$i+1;$j--)
{
echo " ";
}
echo "\n";
}
*/

/*for ($i = 0; $i < 5; $i++)
{

for($j = 5; $j > $i+1; $k-- )
{
echo "* ";

}

for($j = 0; $j <= $i; $j++ )
{

echo " ";
}

echo "<br>";
}*/

echo "<pre>";
$n = 5;
for ($i = 5; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo (" ");
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("*");
    echo "<br>";
}


echo "</pre>";

echo "x printing
$n=5;



?>














