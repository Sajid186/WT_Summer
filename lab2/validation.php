<?php include "control/process.php"; ?>
<html>
    <body>
        <h1>Registration Form</h1>
        <form action="" method="post">
            <table>
                
            <tr>
            <td>First Name :</td>
            <td><input type="name" name="fstname"><?php echo $validatename; ?></td>
            </tr>
            <tr>
            <td>Last Name :</td>
            <td><input type="name" name="lstname"><?php echo $validatename1; ?></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
            <td>Designation :</td>
            <td>
             <input type="radio" name="desig">Junior programmer
             <input type="radio" name="desig">Senior Programmer
             <input type="radio" name="desig">Project Lead
            <?php echo $validateradio; ?>
            </td> 
            </tr>
            <tr>
             <td>Preffered Language :</td>
             <td>
             <input type="checkbox" name="java">Java
             <input type="checkbox" name="php">PHP
             <input type="checkbox" name="c++">C++
             <?php echo $validationcb; ?>           
            </td>   
            </tr>

            <tr>
            <td>Email :</td>
            <td><input type="email" name="email"> <?php echo $validateemail; ?></td>
            </tr>
            <tr>
            <td>Password :</td>
            <td><input type="password" name="pass"><?php echo $validationpass; ?></td>
            </tr>
            <tr>
            <td>Please choose a fileperms:</td>
            <td><input type="file"></td>
            </tr>
            <tr>
            <td>
            <input type="submit" value="Submit"> 
            <input type="reset" value="Reset">
            </td>
            </tr>
            
            
               
</table>
</form>
</body>
    </html>