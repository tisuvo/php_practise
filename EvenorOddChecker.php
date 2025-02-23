<?php
session_start();
     if ($_SERVER['REQUEST_METHOD']=='POST') {

        $check =$_POST['num'];

        if ($check%2==0) {
            $_SESSION ['ck'] = "EVEN".$check;
        }
        else{
            $_SESSION['ck'] = "ODD".$check;
        }
        
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();


     }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name="num" required>
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_SESSION['ck'])) {
        echo $_SESSION['ck'];
        unset($_SESSION['ck']);
        session_destroy();
    }
    ?>

</body>
</html>
