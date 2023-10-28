<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Data Peminjaman Buku</title>
</head>

<body>
    <div class="container">
        <h1>Data Peminjaman Buku</h1>
        <br>
        <a href="create.php"> <button class="btn btn-primary">tambah</button></a>
        <?php
        require_once "koneksi.php";

        if (!isset($_SESSION['username'])) {
            // echo $_SESSION ['username'];
            header('location:login.php');
        } else {
            echo $_SESSION['username'];
            echo "<a href = 'logout.php'><button class ='btn btn-danger'>logout</button></a>";
        }
        ?>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>ID Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "koneksi.php";
                $sql = "SELECT * FROM peminjam";
                $result = $koneksi->query($sql);
                $ID_Peminjaman = 1101;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $ID_Peminjaman++ . "</td>";
                        echo "<td>" . $row['ID_Buku'] . "</td>";
                        echo "<td>" . $row['Tanggal_Peminjaman'] . "</td>";
                        echo "<td>" . $row['Tanggal_Pengembalian'] . "</td>";
                        echo "<td><a href='delete.php?ID_Peminjaman=" . $row['ID_Peminjaman'] . "'><button class='btn btn-danger'>Hapus</button></a></td>";
                        echo "<td><a href='edit.php?ID_Peminjaman=" . $row['ID_Peminjaman'] . "'><button class='btn btn-warning'>Edit</button></a></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>