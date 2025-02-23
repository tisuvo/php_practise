<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1new = $_POST['num1'];
    $num2new = $_POST['num2'];
    $numnew = $num1new + $num2new;


    $_SESSION['sum'] = "Total num ".$numnew;


    header("Location: ".$_SERVER['PHP_SELF']);
    exit(); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <input type="submit" name="submit">
    </form>

    <?php

    if (isset($_SESSION['sum'])) {
        echo $_SESSION['sum'];
        unset($_SESSION['sum']); 
        session_destroy();
    }
    ?>

</body>
</html>
