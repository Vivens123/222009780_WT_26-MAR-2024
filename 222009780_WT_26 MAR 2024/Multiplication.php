<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Results</title>
</head>
<body>
<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$Fname=$_POST['Fname'];
		$Lname=$_POST['Lname'];
		$numb1=$_POST['numb1'];
		$numb2=$_POST['numb2'];
		$spece= "";
		$div=$numb1*$numb2;
		$names =$Fname."".$Lname;
  echo  "<p> Hello $names</p>";
		echo  "<p> The  Multiplication of $numb1 and $numb2 is : $div</p>";
	}
?>
</body>
</html>
 27 changes: 27 additions & 0 deletions27  
Substraction.html