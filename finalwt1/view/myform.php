<?php include "../control/process.php"; ?>
<html>
    <body>
        <h1>Registration Form</h1>
        <form action="" method="post">
            <table>
                
            <tr>
            <td>First Name :</td>
            <td><input type="name" name="fname">
            </tr>
            <tr>
            <td>Last Name :</td>
            <td><input type="name" name="lname">
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
            <td>Designation :</td>
            <td>
            Junior programmer <input type="radio" name="myGender" value="Juniorprogrammer">
            Senior Programmer <input type="radio" name="myGender" value="SeniorProgrammer">
            Project Lead <input type="radio" name="myGender" value="ProjectLead">
            
            </td> 
            </tr>
            <tr>
             <td>Preffered Language :</td>
             <td>
             JAVA<input type="checkbox" id="java" name="plang" value="Java">
             PHP<input type="checkbox" id="php" name="plang" value="PHP">
             C++<input type="checkbox" id="cpp" name="plang" Value="C++"> 
               
                  
            </td>   
            </tr>

            <tr>
            <td>Email :</td>
            <td><input type="email" name="email">
            </tr>
            <tr>
            <td>Password :</td>
            <td><input type="password" name="pass">
            </tr>
            <tr>
            <td>Please choose a file:</td>
            <td><input type="file" name ="myfile"></td>
            </tr>
            <tr>
            <td>
            <input type="reset" value="Reset"> 
            <input type="submit" name="submission" value= "Submit">
            </td>
            </tr>
            
            
               
</table>
</form>
</body>
    </html>