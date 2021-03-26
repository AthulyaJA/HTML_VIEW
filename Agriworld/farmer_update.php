<?php session_start();
$id=$_SESSION['loginid'];
$mysql=new mysqli("localhost","root","","agriworld");
$query=$mysql->query("select * from tb_farmer  where loginid=$id ");
foreach($query as $value=>$row)
    {
echo  $name=$row['fname'];
	


?><!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<style>


.menubar ul li
{
	padding:15px;
}
.menubar
{
	background-color:#936c6c;
	text-align:center;
}
.menubar ul
{
	list-style:none;
	display:inline-flex;
}
.menubar ul li a
{
	color:white;
	text-decoration:none;
}
</style>
</head>

<body class="bi">
<!------- navigation starts------->
<nav class="menubar">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="gallery_images.php"> Gallery</a></li>
		<li><a href="logout.php"> logout</a>
		
			<div class="submenu">
				<ul>
					<li><a href="#"></li>
					<li><a href="#"></li>
				</ul>
			</div>
		</li>
		<li><a href="../work4/contact.html"> Contact us</a></li>
	</ul>
</nav>


<title>Updation Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleform.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1> Farmer updation Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="update_farmer_action.php" method="post">
					<input class="text" type="text" name="fname" placeholder="Firstname" required="" value=<?php echo $row['fname']; ?>>
					<input class="text" type="text" name="lname" placeholder="Lastname" required="" value=<?php echo $row['lname']; ?>>
					
					<input class="text" type="date" name="dob" placeholder="Date of Birth" required="" value=<?php echo $row['dob']; ?>></td>
					
					<input type="text" class="text" type="address" name="address" placeholder="Address" required="" value=<?php echo $row['address']; ?>></td>
					<input class="text" type="text" name="phone" placeholder="Phonenumber" required="" value=<?php echo $row['phno']; ?>>
					<input class="text email" type="email" name="email" placeholder="Email" required="" value=<?php echo $row['email']; ?>>
					<input class="text" type="text" name="adhar" placeholder="Adhar" required="" value=<?php echo $row['adar']; ?>>
					
					
					
	<?php } ?>
						
					<input type="submit" value="UPDATE">
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p><a href="https://colorlib.com/" target="_blank"></a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>