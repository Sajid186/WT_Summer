<?php
include ("../model/db.php");

if(isset($_POST["submission"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $designation=$_POST["myGender"];
    $planguage=$_POST["plang"];
    $email=$_POST["email"];
    $password=$_POST["pass"];
    $picture=$_POST["myfile"];

    $mydb=new db();
    $myconn=$mydb->opencon();

    $mydb->insertuser($fname,$lname,$age,$designation,$planguage,$email,$password,$picture,"employee",$myconn);


}

?>