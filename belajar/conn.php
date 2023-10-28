<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "test";

$koneksi = mysqli_connect("localhost", "root", "", "test");
if (mysqli_connect_errno()) {
    echo "koneksi database gagal : " . mysqli_connect_error();
} else {

}
?>