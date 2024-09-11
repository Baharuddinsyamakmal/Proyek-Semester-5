<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no = $_POST['no'];
    $nama_matakuliah = $_POST['nama_matakuliah'];
    $dosen = $_POST['dosen'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $ruangan = $_POST['ruangan'];
    $semester = $_POST['semester'];

    // Query untuk menambahkan data jadwal ke database
    $stmt = $conn->prepare("INSERT INTO jadwal (no, nama_matakuliah, dosen, hari, jam, ruangan, semester) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssssi", $no, $nama_matakuliah, $dosen, $hari, $jam, $ruangan, $semester);

    if ($stmt->execute()) {
        header("Location: jadwal.php");
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
    <title>Tambah Jadwal</title>
    <link rel="stylesheet" href="assets/css/tambahdata.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Jadwal</h1>
        <form action="tambahjadwal.php" method="post">
            <div class="form-group">
                <label for="no">No:</label>
                <input type="text" id="no" name="no" required>
            </div>
            <div class="form-group">
                <label for="nama_matakuliah">Nama Matakuliah:</label>
                <input type="text" id="nama_matakuliah" name="nama_matakuliah" required>
            </div>
            <div class="form-group">
                <label for="dosen">Dosen:</label>
                <input type="text" id="dosen" name="dosen" required>
            </div>
            <div class="form-group">
                <label for="hari">Hari:</label>
                <select id="hari" name="hari" required>
                    <option value="">Pilih Hari</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jam">Jam:</label>
                <input type="time" id="jam" name="jam" required>
            </div>
            <div class="form-group">
                <label for="ruangan">Ruangan:</label>
                <select id="ruangan" name="ruangan" required>
                    <option value="">Pilih Ruangan</option>
                    <option value="Ruangan 1">Ruangan 1</option>
                    <option value="Ruangan 2">Ruangan 2</option>
                    <option value="Ruangan 3">Ruangan 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="semester">Semester:</label>
                <select id="semester" name="semester" required>
                    <option value="">Pilih Semester</option>
                    <option value=" 1"> 1</option>
                    <option value=" 2"> 2</option>
                    <option value=" 3"> 3</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Tambah</button>
            </div>
        </form>
        <div class="back">
            <a href="jadwal.php">Kembali</a>
        </div>
    </div>
</body>
</html>
