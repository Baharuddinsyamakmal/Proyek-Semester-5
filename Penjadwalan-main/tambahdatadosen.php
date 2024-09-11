<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $title = $_POST['title'];
    $pengampu = $_POST['pengampu'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    // Query untuk menambahkan data dosen ke database
    $stmt = $conn->prepare("INSERT INTO dosen (id, nama, title, pengampu, email, telepon) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $id, $nama, $title, $pengampu, $email, $telepon);

    if ($stmt->execute()) {
        header("Location: dosentess.php");
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
    <title>Tambah Data Dosen</title>
    <link rel="stylesheet" href="assets/css/tambahdata.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Data Dosen</h1>
        <form action="tambahdatadosen.php" method="post">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="pengampu">Pengampu:</label>
                <input type="text" id="pengampu" name="pengampu" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telepon">No. Telepon:</label>
                <input type="text" id="telepon" name="telepon" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Tambah</button>
            </div>
        </form>
        <div class="back">
            <a href="dosentess.php">Kembali</a>
        </div>
    </div>
</body>
</html>
