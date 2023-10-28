<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
             require_once "conn.php";

            if (isset($_SESSION['username'])){
                echo "<script>
                window.location.href='index.php';
                </script>";
            }

        if (isset($_POST['submit'])) {

             $username = $_POST['username'];
             $password = $_POST ['password'];


             $sql = "SELECT * FROM username WHERE username = '$username' AND password = '$password'";
            $result = $conn->query($sql);
// var_dump($result);
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $username = $row['username'];

                $_SESSION["username"] = $username;
                header("location: index.php");
             }else {
                    echo "GAGAL";
                }
            }
        ?>
    <form action="" method="post">
        <input type="text" name="username"> <br>
        <input type="password" name="password"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>