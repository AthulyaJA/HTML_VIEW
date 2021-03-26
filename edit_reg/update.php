<?php
$mysql=new mysqli("localhost","root","","insert");
$id=$_GET['id'];
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$query=$mysql->query("update form set fname='$fname',lname='$lname' where id='$id'");

 header('location:home.php');

?>