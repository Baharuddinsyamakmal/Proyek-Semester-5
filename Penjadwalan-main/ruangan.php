<?php
session_start();
include 'koneksi.php';

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: logintes.php");
    exit();
}

// Query untuk mendapatkan data ruangan
$result = $conn->query("SELECT * FROM ruangan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ruangan</title>
    <link rel="stylesheet" href="assets/css/cssdosen.css">
</head>
<body>
    <div class="container">
        <h1>Data Ruangan</h1>
        <div id="dataDosen"></div>
        <div class="add-data">
            <a href="index.php">Dashboard</a>
            <a href="tambahruangan.php">Tambah Data</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ruangan</th>
                    <th>Kampus</th>
                    <th>Kapasitas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nama_ruangan'] . "</td>";
                        echo "<td>" . $row['kampus'] . "</td>";
                        echo "<td>" . $row['kapasitas'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No data found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="pagination">
        <button id="prevBtn" onclick="prevPage()">Previous</button>
        <button id="nextBtn" onclick="nextPage()">Next</button>
    </div>
    <script src="script.js"></script>
</body>
</html>
