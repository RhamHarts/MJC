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
    <div class="container">
        <a href="create.php"> <button class="btn btn-primary">Post</button></a>
        <br>
        <br>
        <?php
        require_once "koneksi.php";

        $sql = "SELECT * FROM post";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="post">';
                echo '<h2>' . $row['title'] . '</h2>';
                echo '<p>' . $row['content'] . '</p>';
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