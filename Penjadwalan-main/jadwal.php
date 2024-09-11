<?php
include 'koneksi.php';

// Query untuk mendapatkan data jadwal
$sql = "SELECT no, nama_matakuliah, dosen, hari, jam, ruangan, semester FROM jadwal";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
    <link rel="stylesheet" href="asset/css/cssdosen.css">
</head>
<body>
    <div class="container">
        <h1>Jadwal</h1>
        <div class="add-data">
            <a href="index.php">Dashboard</a>
            <a href="tambahjadwal.php">Tambah Data</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Matakuliah</th>
                    <th>Dosen</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Ruangan</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['no']}</td>
                                <td>{$row['nama_matakuliah']}</td>
                                <td>{$row['dosen']}</td>
                                <td>{$row['hari']}</td>
                                <td>{$row['jam']}</td>
                                <td>{$row['ruangan']}</td>
                                <td>{$row['semester']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="pagination">
            <button id="prevBtn" onclick="prevPage()">Previous</button>
            <button id="nextBtn" onclick="nextPage()">Next</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php
$conn->close();
?>
