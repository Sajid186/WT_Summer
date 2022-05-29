<?php
$number1 = $_POST["n1"];

$number2 = $_POST["n2"];


$addition = $_POST["calc"];
$subtraction = $_POST["calc"];
$multiplication = $_POST["calc"];
$divition = $_POST["calc"];

if($addition == "+")
{
  echo "The result: "; 
  echo $number1+$number2;
}

if($subtraction == "-")
{
  echo "The result: "; 
  echo $number1-$number2;
}

if($multiplication == "*")
{
  echo "The result: "; 
  echo $number1*$number2;
}

if($divition == "/")
{
  echo "The result: "; 
  echo $number1/$number2;
}

?>