<html>
<head>
<title>First site </title>

</head>
<body>
<form method="post" action="<?php echo base_url()?>amsctrl/reg_access">

<h1>STUDENTS REGISTRATION FORM </h1>

	
	Name:<input type="text" name="name"></br></br>
	fatherName:<input type="text" name="fname"></br></br>
	
	Address:<textarea type="text" name="address"></textarea></br></br>
	District:<select id="district" name="dist">
					<option value="T">Thiruvananthapuram</option>
					<option value="kollam">kollam</option>
					<option value="kottayam">Pathanamthitta</option>
					<option value="p">Kottayam</option>
					<option value="kollam">Eranakulam</option>
					<option value="kottayam">Idukki</option>
					<option value="TVM">Thrissur</option>
					<option value="kollam">Kannur</option>
					<option value="kottayam">Kasarkode</option>
					<option value="TVM">Kozhikode</option>
					<option value="kollam">Palakkad</option>
					<option value="kottayam">Wayanad</option>
					<option value="kollam">Malappuram</option>
					<option value="kottayam"></option></select><br><br>
	Pincode:	<input type="text" name="pincode"></br></br>
	Phone number:	<input type="text" name="phoneno"></br></br>
	Dob:	<input type="date" name="dob"></br></br>
	Gender:	<input type="radio" name="gender" id="male"><label for="male">male</label><input type="radio" name="gender" id="female"><label for="female">Female</label></br></br>
	Education:	<input list="education" name="education"></br></br>
				<datalist id="education">
					<option value="B.tech">
					<option value="M.tech">
					<option value="Bsc">
					<option value="MCA">
				</datalist>
				Course:	<input list="course" name="course"></br></br>
				<datalist id="course">
					<option value="JSD">
					<option value="Front-End Developer">
					<option value="Back-end Developer">
					<option value="Network">
				</datalist>

	Email:<input type="email" name="email"></br></br>
	Password:<input type="text" name="password"></br></br>
	<input type="submit" value="Register"></br></br>
	
	</form>
	</body>
	</html>
	
