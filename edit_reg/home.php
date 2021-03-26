<html>
<head>
<style>
table,th,td
{
	border:1px solid black;
	border-collapse:collapse;
	background-color:blue;
	color:white;
	font-size:20px;
}
th,td
{
	padding:10px;
}
a{
	color:white;
	
}
table
{
	border-spacing:5px;
	
}
body{
	 
	 color:black;
	}

input{
	margin:5px;
	
}
</style>
</head>

<body>
<h1>INSERT AND VIEW</h1>
<form action="insert.php" method="get"><pre>
<b>
		First Name:	<input type="text" name="fname"><br>
		Last Name:	<input type="text" name="lname"><br>
						<input type="submit" name="insert" value="insert"><br>
<h1 style="color:white">TABLE</h1>
<table>
<center>
 <tr> 
 <th>id</th>
 <th>firstname</th>
 <th>lastname</th>
 <th>view</th>
 <th>Edit</th>
 </tr>
 <?php
$mysql=new mysqli("localhost","root","","insert");
$query=$mysql->query("select * from form");

foreach($query as $value=>$row)
    {
	 
     echo "<tr>
	 <td>".$row['id']."</td>
	 <td>".$row['fname']."</td>
	 <td>".$row['lname']."</td>
	 
	 <td>
	<a href='viewform.php?id=".$row['id']."'>view</a></td>
	 <td><a href='upform.php?id=".$row['id']."'>Edit</a></td>
  </td>
   </tr>";
}
?>
</form>

</body>
</html>

