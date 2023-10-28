<?php

require_once "koneksi.php";
$id = $_GET['id'];

$sql = "DELETE FROM post WHERE id = '$id'";
$result = $koneksi->query($sql);

if ($result) {
    header("location: index.php");
} else {
    echo "gagal";
}