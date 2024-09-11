<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $jurusan = $_POST['jurusan'];
    $matakuliah = $_POST['matakuliah'];
    $dosen = $_POST['dosen'];
    $semester = $_POST['semester'];

    // Query untuk menambahkan data matakuliah ke database
    $stmt = $conn->prepare("INSERT INTO matakuliah (id, jurusan, matakuliah, dosen, semester) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $id, $jurusan, $matakuliah, $dosen, $semester);

    if ($stmt->execute()) {
        header("Location: matakuliah.php"); // Redirect ke halaman matakuliah.php setelah berhasil menambahkan data
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Matakuliah</title>
    <link rel="stylesheet" href="assets/css/tambahdata.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Matakuliah</h1>
        <form action="tambahmatakuliah.php" method="post">
            <div class="form-group">
                <label for="id">No:</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" required>
            </div>
            <div class="form-group">
                <label for="matakuliah">Matakuliah:</label>
                <input type="text" id="matakuliah" name="matakuliah" required>
            </div>
            <div class="form-group">
                <label for="dosen">Dosen:</label>
                <input type="text" id="dosen" name="dosen" required>
            </div>
            <div class="form-group">
                <label for="semester">Semester:</label>
                <input type="text" id="semester" name="semester" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Tambah</button>
            </div>
        </form>
        <div class="back">
            <a href="matakuliah.php">Kembali</a>
        </div>
    </div>
</body>
</html>
