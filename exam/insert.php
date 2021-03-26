<?php
$mysql=new mysqli("localhost","root","","exam");
/*$id=$_GET['id'];*/
$name=$_GET['name'];
$dob=$_GET['dob'];
$add=$_GET['add'];
$pin=$_GET['pin'];
$email=$_GET['email'];
$pass=$_GET['pass'];
$q=$mysql->query("insert into student(name,dob,Address,pincode,email,password) values('$name',$dob,'$add',$pin,'$email',$pass)");
header('location:insert2.php');
?>
