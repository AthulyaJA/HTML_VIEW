<!DOCTYPE html>
<html>
<head>
<style>
body{
	border:2px solid red;
	height:400px;
	width:400px;
	
}
input
{
	padding:10px;
	margin:10px;
	background:rgba(255,0,0,0.1);
}
	

</style>
<body>
<h1>UPDATION</h1>
<!---<form action="isert.php" method="get">-->
<form  action="update.php" method="post">
<?php
  $mysql=new mysqli("localhost","root","","project");
  $slno=$_GET['slno'];
  $query=$mysql->query("select * from student where sl.no=$slno");
  $row=$query->fetch_assoc();
?>
       <input type="hidden" name="slno" value="<?php echo $row['sl.no']; ?>"><br>
       Name:<input type='text' name='name' value="<?php echo $row['student_name']; ?>"><br>
      Rollnumber:<input type='text' name='roll' value="<?php echo $row['student_rollnu']; ?>"><br>
	  Adress:<textarea type='text' name='address' value="<?php echo $row['student_address']; ?>"></textarea><br>
      Email:<input type="email" name='email' value="<?php echo $row['student_email']; ?>">
<input type="submit" value="update">
</form>
</body>
</html>