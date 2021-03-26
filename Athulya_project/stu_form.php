<html>
     <head>
<title>HTML FORM</title>
<style>
input{
padding:10px;
margin:10px;
color:blue}
</style>
     </head>
<body> 

    <form action="insert.php" method='post'>
<h1>STUDENT FORM</h1>

     <h4>Student Name:</h4>
        <input type="text" name="name"  placeholder="Name"><br>

     <h4>Student RollNmuber:</h4>
	 
     <input type="type" name="roll" placeholder="Rollnumber"><br>
	 
	 <h4> Student Address:</h4>
	    <textarea type="Address" name="address" placeholder="Address"> </textarea><br>
		<!--<h4>Location</h4>
		<input list="Location" name="#" placeholder="Location">
		<datalist id="Location">
		
		<option value="TVM">
		<option value="kollam">
		<option value="kottayam"></datalist>-->
		
	 
	 <h4>Student Email:</h4>
	 <input type="email" name="email" placeholder="email"><br>
	 

    <input type="submit" value="submit">

 
	</form>
	</body>
	</html>