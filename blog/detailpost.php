<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Detail Post</title>
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
        $image = $row['image']; // Ambil path gambar dari basis data
    } else {
        echo "Data tidak ditemukan.";
    }
}
?>

<body>
    <br>
    <h1>Detail Post</h1>
    <br>
    <br>
    <br>
    <div class="container">
        <form class="form">
            <div class="form-group">
                <label for="title">Title:</label>
                <input class="form-control" id="title" type="text" value="<?= $title ?>" readonly>
            </div>
            <div class="form-group">
                <?php
                if (!empty($image)) {
                    echo "<img src='$image' alt='Gambar' style='max-width: 300px; max-height: 200px;'>";
                } else {
                    echo "Tidak ada gambar.";
                }
                ?>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" name="content" rows="6" placeholder="Content"
                    readonly><?= $content ?></textarea>
            </div>

        </form>
    </div>
</body>

</html>