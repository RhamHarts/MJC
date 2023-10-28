<?php

require_once "conn.php";
$id = $_GET['id'];

$sql = "DELETE FROM buku WHERE id = '$id'";
$result = $koneksi->query($sql);

if ($result) {
    header("location: index.php");

} else {
    echo "gagal";
}