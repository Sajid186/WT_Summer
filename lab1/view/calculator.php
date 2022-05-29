<html>
<head>
  <title>Calculator</title>
</head>
<body>
  <h1>CALCULATOR</h1>

  <form action = "../control/process.php" method = "POST">

  Enter the first Number: <input type = "number" name = "n1"><br>
  Enter the second Number: <input type = "number" name = "n2"><br>
  <br>

  <h2>Select Your Operation</h2>

  <input type = "radio" name = "calc" value = "+">+
  <input type = "radio" name = "calc" value = "-" >-
  <input type = "radio" name = "calc" value = "*">*
  <input type = "radio" name = "calc" value = "/">/
  <br><br>

  <input type = "submit" value = "Result">

</form>
</body>
</html>
