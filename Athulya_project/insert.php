
<?php
$mysql=new mysqli("localhost","root","","project");
#$user_id=$_GET['id'];
#$query=$mysql->query("alter table  ddu_pgky1  add  (user_id=$user_id) INT");
#$user_id=$_GET['id'];
$sl=$_POST['sl.no'];
$name=$_POST['name'];
$roll=$_POST['roll'];
$address=$_POST['address'];
$email=$_POST['email'];

$query=$mysql->query("insert into student(student_name,student_rollnu,student_address,student_email) values('$name','$roll','$address','$email')");

 header('location:table.php');      
        
 
?>
