<?php
include 'koneksi.php';

// Query untuk mendapatkan data dosen
$sql = "SELECT id, nama, title, pengampu, email, telepon FROM dosen";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="assets/css/cssdosen.css">
</head>
<body>
    <div class="container">
        <h1>Data Dosen</h1>
        <div id="dataDosen"></div>
        <div class="add-data">
            <a href="index.php">Dashboard</a>
            <a href="tambahdatadosen.php">Tambah Data</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Title</th>
                    <th>Pengampu</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nama']}</td>
                                <td>{$row['title']}</td>
                                <td>{$row['pengampu']}</td>
                                <td>{$row['email']}</td>
                                <td>{$row['telepon']}</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Tidak ada data</td></tr>";
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
