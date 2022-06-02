<?php
$validatename="";
$validatename1="";
$validateemail="";
$validateradio="";
$validationpass="";
$validationcb="";
$name=$name1=$email=$des="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["fstname"];
    $name1=$_REQUEST["lstname"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["pass"];
    $deignation=$_REQUEST["desig"];
    
if(empty($_REQUEST["fstname"]) || (strlen($_REQUEST["fstname"])<3))
{
    $validatename= "*you must enter first name";

}
else
{
    $validatename="First Name : " .$name;
}

$name=$_REQUEST["lstname"];
if(empty($_REQUEST["lstname"]) || (strlen($_REQUEST["lstname"])<3))
{
    $validatename1= "*you must enter last name";

}
else
{
    $validatename1="Last Name : " .$name1;
}

$email=$_REQUEST["email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="*you must enter email";
}
else{
    $validateemail= "your email is ".$email;
}

$password=$_REQUEST["pass"];
if((strlen($_REQUEST["pass"])<8))
{
    $validationpass= "*your password must be 8 characters";

}


if(isset($_REQUEST["desig"]))
{
    
    $validateradio= "radio selected";

    
}
else
{
    $validateradio= "*please select at least one radio";
}
if(isset($_REQUEST["java"])||isset($_REQUEST["php"])||isset($_REQUEST["c++"]))
{
    $validationcb = "checkbox selected";
    
}
else
{
    echo "*please select at least one checkbox";

}

}
?>