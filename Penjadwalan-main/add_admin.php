<?php
include 'koneksi.php';

// Data pengguna admin
$username = 'admin01';
$password = 'password'; // Password yang ingin Anda gunakan

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL untuk menambahkan pengguna admin ke database
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $hashed_password);

if ($stmt->execute()) {
    echo "Pengguna admin berhasil ditambahkan.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
