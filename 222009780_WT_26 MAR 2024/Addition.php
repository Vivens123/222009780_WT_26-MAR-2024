<!DOCTYPE html>
<html>
<</head>
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
		$sum=$numb1+$numb2;
		$names =$Fname."".$Lname;
  echo  "<p> Hello $names</p>";
		echo  "<p> The  Sum of $numb1 and $numb2 is : $sum</p>";
	}
?>
</body>
</html>