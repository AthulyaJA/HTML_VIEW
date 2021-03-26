<html>


<body>
<table>
<th>email</th>
<th>password</th>


<?php
  $mysql=new mysqli("localhost","root","","exam");
  /*$email=$_GET['email'];
  $pass=$_GET['password'];*/
  
  $query=$mysql->query("select * from table");
  $row=$query->fetch_assoc();
  foreach($query as $value=>$row)
  {
	  echo "<tr>
	        <td>".$row['email']."</td>
			<td>".$row['password']."</td></tr>";
	echo "</table";
  }
  
  
  ?>
  
  </body>
  </html>
  
  