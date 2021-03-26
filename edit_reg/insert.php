

<?php
$mysql=new mysqli("localhost","root","","insert");

$fname=$_GET['fname'];
$lname=$_GET['lname'];
$query=$mysql->query("insert into form(fname,lname) values('$fname','$lname')");
header('location:home.php');

?>