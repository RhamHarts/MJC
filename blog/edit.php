<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Edit Post</title>
</head>

<?php
require_once "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM post WHERE id = $id";

    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $content = $row['content'];
    } else {
        echo "Data tidak ditemukan.";
    }
}

if (isset($_POST['kirim'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "UPDATE post SET title = '$title', content = '$content' WHERE id = $id";

    $result = $koneksi->query($sql);

    if ($result) {
        header("location: index.php");
    } else {
        echo "ERROR";
    }
}
?>

<body>
    <br>
    <h1>Edit Post</h1>
    <br>
    <br>
    <br>
    <div class="container">
        <form action="edit.php" method="post" class="form">
            <input class="form-control" name="id" type="hidden" value="<?= $row['id'] ?>">
            <input class="form-control" type="text" value="<?= $title ?>" name="title" placeholder="Title" required>
            <input class="form-control" type="text" value="<?= $content ?>" name="content" placeholder="Content"
                required>
            <br>
            <input type="submit" value="Kirim" name="kirim" class="btn btn-primary">
        </form>
    </div>
</body>

</html>