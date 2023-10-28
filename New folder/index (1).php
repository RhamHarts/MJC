<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    ini halaman utama

    <?php
    require_once "conn.php";

    if (!isset ($_SESSION['username'])){
        // echo $_SESSION ['username'];
        header('location:login.php');
    } else {
        echo  $_SESSION ['username'];
        echo "<a href = 'logout.php'><button class ='btn btn-danger'>logout</button></a>";
    }
    ?>

</body>
</html>