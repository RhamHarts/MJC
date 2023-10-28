<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            background-color: #f5e0d3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fefefe;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 300px;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #d9b38c;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: inherit;
        }

        input[type="submit"] {
            width: calc(100% - 20px);
            background-color: #d9b38c;
            color: #fff;
            padding: 12px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: inherit;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #b39274;
        }

        h2 {
            color: #b39274;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <?php
        require_once "koneksi.php";

        if (isset($_SESSION['username'])) {
            echo "<script>
                    window.location.href='index.php';
                    </script>";
        }

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM blog WHERE username = '$username' AND password = '$password'";
            $result = $koneksi->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $username = $row['username'];

                $_SESSION["username"] = $username;
                header("location: index.php");
            } else {
                echo "GAGAL";
            }
        }
        ?>
        <h2>Login Form</h2>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username"> <br>
            <input type="password" name="password" placeholder="Password"> <br>
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>

</html>