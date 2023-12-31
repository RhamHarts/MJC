<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Add Post</title>
</head>

<?php
if (isset($_POST['kirim'])) {
    $title = $_POST["title"];
    $content = $_POST["content"];

    // Untuk mengunggah gambar
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    require_once "koneksi.php";

    $sql = "INSERT INTO post (title, content, image ) VALUES ('$title', '$content', '$targetFile' )";

    $result = $koneksi->query($sql);

    if ($result) {
        header("location: index.php");
    } else {
        // echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<body>

    <h1>Add Post</h1>
    <br>
    <br>
    <br>
    <div class="container">
        <form action="" method="post" class="form" enctype="multipart/form-data">
            <input class="form-control" type="text" name="title" placeholder="Title" required>
            <input type="file" name="image" class="form-control-file mt-2" required>
            <textarea class="form-control" name="content" rows="6" placeholder="Content" required></textarea>

            <br>

            <input type="submit" value="Kirim" name="kirim" class="btn btn-primary">
        </form>
    </div>
</body>

</html>