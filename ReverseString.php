<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reverse a String</title>
</head>
<body>


	<form action="" method="POST">
		<input type="text" name="str">
		<input type="submit" name="submit">
	</form>

	<?php
        if ($_SERVER['REQUEST_METHOD']=='POST') {

        	$str=$_POST['str'];
$str2="";
        	for ($i=strlen($str)-1; $i>=0 ; $i--) {

        	$str2.=$str[$i];
        		
        	}

        	echo "string is: ".$str2;
        	
        }
	?>

</body>
</html>