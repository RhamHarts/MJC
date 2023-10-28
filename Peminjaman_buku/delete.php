<?php

require_once "koneksi.php";
$ID_Peminjaman = $_GET['ID_Peminjaman'];

$sql = "DELETE FROM peminjam WHERE ID_Peminjaman = '$ID_Peminjaman'";
$result = $koneksi->query($sql);

if ($result) {
    header("location: index.php");
} else {
    echo "gagal";
}