<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Form Update Buku</title>
</head>


<?php
if (isset($_GET['id'])) {

    require_once "conn.php";

    $sql = "select * from buku where id = " . $_GET['id'];

    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $judul = $row['judul'];
        $penulis = $row['penulis'];
        $tahun_terbit = $row['tahun_terbit'];
    } else {
        echo "GAGAL";
    }
}

if (isset($_POST['kirim'])) {
    require_once "conn.php";

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $sql = "UPDATE buku SET judul = '$judul', penulis = '$penulis', tahun_terbit = '$tahun_terbit' WHERE id = '$id'";

    $result = $koneksi->query($sql);

    if ($result) {
        // echo "<script>
        // swal.fire('success','Book added succesfully!', 'success')
        // </script>";
        header("location: index.php");
    } else {
        // echo "<script>
        // swal.fire('error','Book added failed!', 'error')
        // </script>";
    }
}
?>

<body>
    <br>
    <h1>Form Update Buku</h1>
    <br>
    <br>
    <br>
    <div class="container">
        <form action="edit.php" method="post" class="form">
            <input class="form-control" name="id" type="hidden" value="<?= $row['id'] ?>">
            <input class="form-control" type="text" value="<?= $judul ?>" name="judul" placeholder="judul" required>
            <input class="form-control" type="text" value="<?= $penulis ?>" name="penulis" placeholder="penulis"
                required>
            <input class="form-control" type="text" value="<?= $tahun_terbit ?>" name="tahun_terbit"
                placeholder="tahun_terbit" required>

            <br>
            <input type="submit" value="kirim" name="kirim" class="btn btn-primary">
        </form>
    </div>
</body>

</html>