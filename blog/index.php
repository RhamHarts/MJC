<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>BlokSpot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .post {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .post h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .post p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }

        .post small {
            color: #999;
            font-size: 14px;
        }

        .post a {
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <h1>Blooook Spot</h1>
    <div class="container d-flex justify-content-between">
        <div>
            <a href="create.php"><button class="btn btn-primary">Post</button></a>
        </div>
        <br>
        <br>
        <?php
        require_once "koneksi.php";

        if (!isset($_SESSION['username'])) {
            // echo $_SESSION ['username'];
            header('location:login.php');
        } else {
            echo "<a href = 'logout.php'><button class ='btn btn-danger'>logout</button></a>";
        }
        ?>
    </div>
    <?php
    require_once "koneksi.php";

    $sql = "SELECT * FROM post";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="post">';
            echo '<h2><a href="detailpost.php?id=' . $row['id'] . '">' . $row['title'] . '</a></h2>';
            echo '<p>' . $row['content'] . '</p>';
            if ($row['image']) {
                echo '<img src="' . $row['image'] . '" alt="Gambar" style="max-width: 300px; max-height: 200px;">';
            }
            echo '<p><small>' . $row['created_at'] . '</small></p>';
            echo "<td><a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger'>Hapus</button></a></td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "'><button class='btn btn-warning'>Edit</button></a></td>";
            echo '</div>';
        }
    } else {
        echo "Tidak ada posting.";
    }
    ?>
    </div>
</body>

</html>