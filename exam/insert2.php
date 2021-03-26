


<?php
$mysql=new mysqli("localhost","root","","exam");

$email=$_GET['email'];
$pass=$_GET['pass'];
$q=$mysql->query("insert into table(email,password) values('$email','$pass')");
header('location:selectema.php');
?>