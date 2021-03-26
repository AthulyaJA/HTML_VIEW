<html>

<head>
<style>
table,td,tr,th{
	padding:3px;
	border:2px solid black;
	border-collapse:collapse;
	
}
table{
	 background:red;
	
}
h1
{
	color:blue;
}
body{
	 background-image:url("cl.jpg");
	 background-reapeat:no-reapeat;
}

</style>

</head>

<body>
<h1>STUDENT MANAGEMENT SYSTEM</h1>

<table>
 <tr> 
 
 <th>sl.no</th>
 
     
		
 <th>student_name</th>
 <th>student_rollnu</th>
 <th>student_address</th>
 <th>student_email</th>
 <th>status</th>
   <th>delete/update</th>
	 
 
 


<?php

$link = mysqli_connect("localhost", "root", "", "project");
 



$q= "select * from student";
 if($result = mysqli_query($link, $q)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
			echo "<tr>";
			
	 
			     echo "<td>". $row['sl.no'] . "</td>";
                echo "<td>" . $row['student_name'] . "</td>";
                echo "<td>" . $row['student_rollnu'] . "</td>";
                echo "<td>" . $row['student_address'] . "</td>";
                echo "<td>" . $row['student_email'] . "</td>";
                echo "<td>".$row['status']."</td>";
                 echo "<th>
	 
	 <a href='updateform.php?slno=".$row['sl.no']."'>update</a>/
	 
	 <a href='delet.php?slno=".$row['sl.no']."'>delet</a>
	 
	 
	 </th> </tr>";
	}
	}

        
        echo "</table>";
       
        mysqli_free_result($result);
		
    } else{
        echo "No records matching your query were found.";
    }
 
 


?>

</body>
</html>