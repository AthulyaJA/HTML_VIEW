<html>
<head>
	<style>
		table,th,td{

			margin:10px;
			padding: 10px;
			background-color: rgba(255,0,255,0.5);
			border:1px solid black;
			border-collapse: collapse;
			margin-left:350px;

			}
			table
			{
				border:1px solid black;
			}
			
			h1{
				color:fuchsia;
			}
	</style>
	</head>
	<body>
		<h1><center>NOTIFICATION VIEW</h1>

		<table>
			<tr>
					<th>id</th>
					<th>complaint</th>
					<th>cm_date</th>
					
					
					
			</tr>
			<?php
             
              if($b->num_rows()>0)
              {
                  foreach($b->result() as $row)

              {


         ?>
         <tr>
         	<td><?php echo $row->id;?></td>
         	<td><?php echo $row->complaint;?></td>
         	<td><?php echo $row->cm_date;?></td>
         	
         	


         	</tr>
         	<?php
				}
			}
			?>

		</table>
		
	</body>
	</html>