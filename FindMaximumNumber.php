<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>FindMaximumNumber</title>
</head>
<body>


   <form action="" method="POST">
   	<input type="text" name="num1">
   	<input type="text" name="num2">
   	<input type="text" name="num3">
   	<input type="submit" name="submit">
   </form>
   <?php
 		if ($_SERVER['REQUEST_METHOD']=='POST') {
 			$num1=$_POST['num1'];
 			$num2=$_POST['num2'];
 			$num3=$_POST['num3'];
 			



 			if ($num1>=$num2 && $num1>=$num3) {
 				$_SESSION['num']="Num 1";
 				
 			}
 			elseif ($num2>=$num1 && $num2>=$num3) {
 				$_SESSION['num']="Num 2";
 			}
 			elseif ($num3>=$num1 && $num3>=$num2) {
 				$_SESSION['num']="Num 3";
 			}

        if (isset($_SESSION['num'])) {
        	echo $_SESSION['num'];
        	unset($_SESSION['num']);
        	session_destroy();
        }

 		}
   ?>
</body>
</html>