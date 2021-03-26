<?php

$mysql=new mysqli("localhost","root","","project");
$sl	=$_POST['sl.no'];
$query=$mysql->query("delete from student where sl.no=$sl");
?>