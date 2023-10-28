<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Form Pinjam Buku</title>
</head>

<?php
if (isset($_POST['kirim'])) {
    $ID_Buku = $_POST["ID_Buku"];
    $Tanggal_Peminjaman = $_POST["Tanggal_Peminjaman"];

    require_once "koneksi.php";

    $sql = "INSERT INTO peminjam (ID_Buku, Tanggal_Peminjaman, Tanggal_Pengembalian) VALUES ('$ID_Buku', '$Tanggal_Peminjaman', NULL)";

    $result = $koneksi->query($sql);

    if ($result) {
        header("location: index.php");
    } else {
        // echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<body>

    <h1>Form Pinjam Buku</h1>
    <br>
    <br>
    <br>
    <div class="container">
        <form action="" method="post" class="form">
            <input class="form-control" type="text" name="ID_Buku" placeholder="ID Buku" required>
            <input class="form-control" type="date" name="Tanggal_Peminjaman" placeholder="Tanggal Peminjaman" required>
            <br>
            <input type="submit" value="Kirim" name="kirim" class="btn btn-primary">
        </form>
    </div>
</body>

</html>