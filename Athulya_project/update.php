<?php
$mysql=new mysqli("localhost","root","","project");
$sl=$_POST['sl.no'];
$name=$_POST['name'];
$roll=$_POST['roll'];
$address=$_POST['address'];
$email=$_POST['email'];
$query=$mysql->query("update  student set student_name='$name',student_rollnu='$roll',student_address='$address',student_email='$email' where sl.no='$Sl'");

?>
