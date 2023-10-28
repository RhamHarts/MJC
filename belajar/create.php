<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Form Tambah Buku</title>
</head>


<?php
if (isset($_POST['kirim'])) {

    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $tahun_terbit = $_POST["tahun_terbit"];

    require_once "conn.php";

    $sql = "INSERT INTO buku (judul,penulis,tahun_terbit) VALUES ('$judul','$penulis','$tahun_terbit')";

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
    <h1>Form Tambah Buku</h1>
    <br>
    <br>
    <br>
    <div class="container">
        <form action="" method="post" class="form">
            <input class="form-control" type="text" name="judul" placeholder="judul" required>
            <input class="form-control" type="text" name="penulis" placeholder="penulis" required>
            <input class="form-control" type="text" name="tahun_terbit" placeholder="tahun_terbit" required>

            <br>
            <input type="submit" value="kirim" name="kirim" class="btn btn-primary">
        </form>
    </div>
</body>

</html>