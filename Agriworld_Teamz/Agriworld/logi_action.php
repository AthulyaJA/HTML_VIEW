
<?php
require "database.php";
$e=$_POST['username'];
$p=$_POST['password'];
$sql="select * from tb_login where email='$e' and password='$p'";
 $result = $conn->query($sql);
 //$count = $result->fetchColumn();
 $count = $result->rowCount();  
                if($count > 0)  
                { 
 foreach($result as $row){
	 if($row['status']=='1'){
		 header('location:farmerindex.php');
	 }
	 if($row['status']=='2'){
		 header('location:rejected_user.php');
	 }
	 if($row['status']=='0'){
		header('location:wait.php');
	 }	 
	 
 }
				}else{
					header('location:invalid.php');
					
				}
				
 
 
 
 // header('location:view.php');
?>