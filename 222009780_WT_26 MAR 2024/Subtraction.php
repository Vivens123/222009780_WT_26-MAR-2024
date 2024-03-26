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
		$spece= "";
		$Lname=$_POST['Lname'];
		$numb1=$_POST['numb1'];
		$numb2=$_POST['numb2'];
		$sub=$numb1-$numb2;
		$names =$Fname.$spece.$Lname;
  echo  "<p> Hello $names</p>";
		echo  "<p> The  Substraction of $numb1 and $numb2 is : $sub</p>";
	}
?>
</body>
</html>