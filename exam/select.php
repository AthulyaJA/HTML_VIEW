<html>


<body>
<table>
<th>email</th>
<th>password</th>
<form action="insert2.php" method="post">

<?php
  $mysql=new mysqli("localhost","root","","exam");
  /*$email=$_GET['email'];
  $pass=$_GET['password'];*/
  
  $query=$mysql->query("select * from student");
  $row=$query->fetch_assoc();
  foreach($query as $value=>$row)
  {
	  echo "<tr>
	        <td>".$row['email']."</td>
			<td>".$row['password']."</td></tr>";
	echo "</table";
  }
  
  
  ?>
  </form>
  </body>
  </html>
  