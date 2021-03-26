<html>
<head>
<style>
table,th,td
{
	border:1px solid black;
	border-collapse:collapse;
	background-color:red;
}
th,td
{
	padding:10px;
}
table
{
	border-spacing:5px;
}
</style>
</head>

<body>
<h1>TABLEe</h1>
<table>
 <!--<tr> 
 <th>user_id</th>
 <th>user_name</th>
 <th>user_password</th>
 <th>user_status</th>
 </tr>-->
 <a href="form.php"> insert user</a>
 <?php

 /*$user_name='Ravi';
$user_Age=23;
$user_email='ath@gmail.com';
$user_password=2323;
$user_gender='male';*/

 $mysql=new mysqli("localhost","root","","form");
 $query=$mysql->query("select * from form1");
 
 echo "<tr> 


 <th>Name</th>
 <th>Age</th>
 <th>email</th>
 <th>password</th>
 <th>gender</th>
 </tr>";
 
 	foreach($query as $value=>$row)
	{
	echo "
	<td>".$row['Name']."</td>
	<td>" .$row['Age']."</td>
	<td>".$row['email']."</td>
	<td>".$row['password']."</td>
	<td>".$row['gender']."</td>
	
	</tr>";
	}
	?>
</table>
</body>
</html>