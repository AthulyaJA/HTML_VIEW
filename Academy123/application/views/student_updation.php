
<html>
<head>
<title>First site </title>

</head>
<body>


<h1>STUDENTS UPDATION  FORM </h1>
<form  action="<?php echo base_url()?>amsctrl/update_det" method="post">
     
<?php

       if(isset($user_data))
       { 
           foreach($user_data->result() as $row1)
           {
             
            
    ?>

    
    Name:<input type="text" name="name" value="<?php echo $row1->s_name; ?>"></br></br>
    fatherName:<input type="text" name="fname" value="<?php echo $row1->fathername; ?>"></br></br>
    
    Address:<input type="text" name="address" value="<?php echo $row1->address; ?>"></br></br>
    District:<select id="district" name="dist" value="<?php echo $row1->district; ?>">
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
    Pincode:    <input type="text" name="pincode" value="<?php echo $row1->pincode; ?>"></br></br>
    Phone number:   <input type="text" name="phoneno" value="<?php echo $row1->mobileno; ?>"></br></br>
    Dob:    <input type="date" name="dob"></br></br>
    Gender: <input type="radio" name="gender" id="male" value="<?php echo $row1->gender; ?>"><label for="male">male</label><input type="radio" name="gender" id="female"><label for="female">Female</label></br></br>
    Education:  <input list="education" name="education" value="<?php echo $row1->education; ?>"></br></br>
                <datalist id="education">
                    <option value="B.tech">
                    <option value="M.tech">
                    <option value="Bsc">
                    <option value="MCA">
                </datalist>
                Course: <input list="course" name="course" value="<?php echo $row1->course;?>"></br></br>
                <datalist id="course">
                    <option value="JSD">
                    <option value="Front-End Developer">
                    <option value="Back-end Developer">
                    <option value="Network">
                </datalist>

    Email:<input type="email" name="email" value="<?php echo $row1->user_name; ?>"></br></br>
    Password:<input type="text" name="password"></br></br>
    <input type="submit" value="update"></br></br>
    
<?php
        }
    }
    ?>
    </form>
    </body>
    </html>
    
