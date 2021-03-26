<html>
<head>
<style>

input{
	margin:5px;
}
</style>
</head>

<body>

<form action="home.php" method="get">

<?php
  $mysql=new mysqli("localhost","root","","insert");
  $id=$_GET['id'];
  $query=$mysql->query("select * from form where id=$id");
  $row=$query->fetch_assoc();
  
echo "first_Name:".$row['fname']."<br>";
echo "last_Name:".$row['lname']."<br>";

  ?>
  

<input type="submit"  value="back to home">

</form>
</body>
</html>