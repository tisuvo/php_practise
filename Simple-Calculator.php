<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
</head>
<body>

   <form action="" method="POST">
   	<input type="text" name="num1">
   	<select name="op">
   		<option value="add">+</option>
   		<option value="suv">-</option>
   		<option value="mul">*</option>
   		<option value="div">/</option>
   	</select>

 	<input type="text" name="num2">
 	<input type="submit" name="submit">
 		  	
   </form>
   <?php
      

      if ($_SERVER['REQUEST_METHOD']=='POST') {
      	    $num1=$_POST['num1']; 
      	    $op=$_POST['op']; 
      	    $num2=$_POST['num2'];

      	    if ($_POST['op']=='add') {
      	     	$_SESSION['ans']= "sum is".($num1+$num2);
      	     }
      	     elseif ($_POST['op']=='suv') {
      	      	$_SESSION['ans']= "suv is".($num1-$num2);
      	      } 
      	      elseif ($_POST['op']=='mul') {
      	      $_SESSION['ans']= "mul is".($num1*$num2);
      	      }
      	      elseif ($_POST['op']=='div'){
      	      	 $_SESSION['ans']= "div is".($num1/$num2);
      	      }

      	      header("LOCATION: ".$_SERVER['PHP_SELF']);
      	      exit();
      }

      if (isset($_SESSION['ans'])) {
      	echo $_SESSION['ans'];
      	unset($_SESSION['ans']);
      	session_destroy();
      }


   ?>
</body>
</html>