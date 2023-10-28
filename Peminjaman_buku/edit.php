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
if (isset($_GET['ID_Peminjaman'])) {

    require_once "koneksi.php";

    $sql = "select * from peminjam where ID_Peminjaman = " . $_GET['ID_Peminjaman'];

    $result = $koneksi->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $ID_Buku = $row['ID_Buku'];
        $Tanggal_Peminjaman = $row['Tanggal_Peminjaman'];
        $Tanggal_Pengembalian = $row['Tanggal_Pengembalian'];
    } else {
        echo "GAGAL";
    }
}

if (isset($_POST['kirim'])) {
    require_once "koneksi.php";

    $ID_Peminjaman = $_POST['ID_Peminjaman'];
    $ID_Buku = $_POST['ID_Buku'];
    $Tanggal_Peminjaman = $_POST['Tanggal_Peminjaman'];
    $Tanggal_Pengembalian = $_POST['Tanggal_Pengembalian'];

    $sql = "UPDATE peminjam SET ID_Buku = '$ID_Buku', Tanggal_Peminjaman = '$Tanggal_Peminjaman', Tanggal_Pengembalian = '$Tanggal_Pengembalian' WHERE ID_Peminjaman = '$ID_Peminjaman'";

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
            <input class="form-control" name="ID_Peminjaman" type="hidden" value="<?= $row['ID_Peminjaman'] ?>">
            <input class="form-control" type="text" value="<?= $ID_Buku ?>" name="ID_Buku" placeholder="Id Buku"
                required>
            <input class="form-control" type="date" value="<?= $Tanggal_Peminjaman ?>" name="Tanggal Peminjaman"
                placeholder="Tanggal Peminjaman" required>
            <input class="form-control" type="date" value="<?= $Tanggal_Pengembalian ?>" name="Tanggal_Pengembalian"
                placeholder="Tanggal Pengembalian" required>
            <br>
            <input type="submit" value="kirim" name="kirim" class="btn btn-primary">
        </form>
    </div>
</body>

</html>