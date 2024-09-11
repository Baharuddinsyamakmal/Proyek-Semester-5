<?php
include 'koneksi.php';

// Query untuk mengambil data matakuliah dari database
$result = $conn->query("SELECT * FROM matakuliah");

if ($result === false) {
    die("Error: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
    <link rel="stylesheet" href="assets/css/cssdosen.css">
</head>
<body>
    <div class="container">
        <h1>Data Matakuliah</h1>
        <div id="dataDosen"></div>
        <div class="add-data">
            <a href="index.php">Dashboard</a>
            <a href="tambahmatakuliah.php">Tambah Data</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Matakuliah</th>
                    <th>Dosen</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['jurusan']); ?></td>
                        <td><?php echo htmlspecialchars($row['matakuliah']); ?></td>
                        <td><?php echo htmlspecialchars($row['dosen']); ?></td>
                        <td><?php echo htmlspecialchars($row['semester']); ?></td>
                    </tr>
                <?php endwhile; ?>
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
