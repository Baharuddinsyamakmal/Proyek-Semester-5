<?php
session_start();
include 'koneksi.php';

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: logintes.php");
    exit();
}

// Query untuk menghitung jumlah dosen
$result = $conn->query("SELECT COUNT(*) as total FROM dosen");
if ($result === false) {
    die("Error: " . $conn->error);
}
$row = $result->fetch_assoc();
$total_dosen = $row['total'];

// Query untuk menghitung jumlah matakuliah
$result = $conn->query("SELECT COUNT(*) as total FROM matakuliah");
if ($result === false) {
    die("Error: " . $conn->error);
}
$row = $result->fetch_assoc();
$total_matakuliah = $row['total'];

// Query untuk menghitung jumlah jadwal
$result = $conn->query("SELECT COUNT(*) as total FROM jadwal");
if ($result === false) {
    die("Error: " . $conn->error);
}
$row = $result->fetch_assoc();
$total_jadwal = $row['total'];

// Query untuk menghitung jumlah ruangan
$result = $conn->query("SELECT COUNT(*) as total FROM ruangan");
if ($result === false) {
    die("Error: " . $conn->error);
}
$row = $result->fetch_assoc();
$total_ruangan = $row['total'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">
    <title>Sinar Alam Studio</title>
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="assets/img/slide1.jpg" alt="Slide 1"></div>
            <div class="swiper-slide"><img src="assets/img/slide2.jpg" alt="Slide 2"></div>
            <div class="swiper-slide"><img src="assets/img/slide3.jpg" alt="Slide 3"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class="content-wrapper">
        <header>
            <nav class="fixed-nav">
                <div class="logo">Layanan Jasa Foto, Video, Produk</div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                        <a href="javascripct:void(0)" class="dropbtn">Jasa Foto</a>
                        <div class="dropdown-content">
                            <a href="#">Foto di Studio Kami</a>
                            <a href="#">Foto di Lokasi Anda</a>
                    <li><a href="matakuliah.php">Jasa Video</a></li>
                    <li><a href="jadwal.php">Portofolio</a></li>
                    <li><a href="ruangan.php">Team</a></li>
                    <li><a href="logout.php">Info</a></li>
                </ul>
            </nav>
        </header>
    </div>
        <main>
            <div class="teks">
                <p><strong>Selamat Datang di Website Layanan Jasa Foto, Video, dan Penjualan Produk</strong></p>
                <p>Kami senang Anda berada di sini. Website ini dirancang untuk mempermudah Anda dalam mengelola data dan informasi penjadwalan secara efisien dan efektif.</p>
            </div>
            <section class="informasi">
                <div class="informasi-item informasi-kampus">
                    <img class="img-mahasiswa" src="assets/img/6.png" alt="Kampus">
                    <h2>Terpercaya</h2>
                    <p>Kami telah membantu berbagai perusahaan lokal dan multinasional untuk meningkatkan penjualan yang efektif melalui perbaikan BRANDING IMAGE perusahaan dengan memanfaatkan visual dan gambar foto yang menarik yang dihasilkan fotografi professional.</p>
                </div>
                <div class="informasi-item informasi-ruangan">
                    <img class="img-mahasiswa" src="assets/img/ruangan.png" alt="Ruangan">
                    <h2>Harga Terjangkau</h2>
                    <p>Diskusikan dengan admin kami mengenai kebutuhan anda secara mendetail. Kami akan memberikan penawaran harga yang terbaik untuk anda.</p>
                </div>
                <div class="informasi-item informasi-mahasiswa">
                    <img class="img-mahasiswa" src="assets/img/5.png" alt="Mahasiswa">
                    <h2>Foto di Lokasi Anda</h2>
                    <p>Kami juga menyediakan tim khusus untuk mengunjungi lokasi anda. Demi kenyamanan, hubungi kami untuk book jadwal foto 1 minggu sebelumnya.</p>
                </div>
                <div class="informasi-item informasi-mahasiswa">
                    <img class="img-mahasiswa" src="assets/img/5.png" alt="Mahasiswa">
                    <h2>Foto di Studio Kami</h2>
                    <p>Untuk order foto produk, anda dapat langsung mengirimkan produk anda ke alamat studio kami. Pengerjaan berlangsung mulai dari 3 hari tergantung tingkat kesulitannya.</p>
                </div>
            </section>
            <div class="teks"><strong>Dashboard</strong></div>
            <section class="dashboard"></section>
            <section class="cards">
                <div class="card">
                    <a href="dosentess.php">
                        <img class="img_drs" src="assets/img/dosen.png" alt="dosen">
                        <h3>Total Dosen</h3>
                        <p><?php echo $total_dosen; ?></p>
                    </a>
                </div>
                <div class="card">
                    <a href="matakuliah.php">
                        <img class="img_drs" src="assets/img/matakuliah.png" alt="matakuliah">
                        <h3>Matakuliah</h3>
                        <p><?php echo $total_matakuliah; ?></p>
                    </a>
                </div>
                <div class="card">
                    <a href="jadwal.php">
                        <img class="img_drs" src="assets/img/jadwal.png" alt="jadwal">
                        <h3>Jadwal</h3>
                        <p><?php echo $total_jadwal; ?></p>
                    </a>
                </div>
                <div class="card">
                    <a href="ruangan.php">
                        <img class="img_drs" src="assets/img/ruangan.png" alt="ruangan">
                        <h3>Ruangan</h3>
                        <p><?php echo $total_ruangan; ?></p>
                    </a>
                </div>
            </section>
            <div class="teks">
                <p><strong>Selamat Datang di Website Penjadwalan ITH</strong></p>
                <p>Kami senang Anda berada di sini. Website ini dirancang untuk mempermudah Anda dalam mengelola data dan informasi penjadwalan secara efisien dan efektif.</p>
            </div>
            <section class="informasi">
                <div class="informasi-item informasi-kampus">
                    <img class="img-mahasiswa" src="assets/img/6.png" alt="Kampus">
                    <h2>Tentang Kampus</h2>
                    <p>Institut Teknologi BJ. Habibie adalah institusi pendidikan tinggi terkemuka yang menawarkan berbagai program studi berkualitas tinggi dan fasilitas modern untuk mendukung proses pembelajaran.</p>
                </div>
                <div class="informasi-item informasi-ruangan">
                    <img class="img-mahasiswa" src="assets/img/ruangan.png" alt="Ruangan">
                    <h2>Informasi Ruangan</h2>
                    <p>Kami memiliki berbagai ruangan yang dilengkapi dengan fasilitas canggih untuk mendukung kegiatan akademik dan non-akademik. Setiap ruangan dirancang untuk memberikan kenyamanan dan efisiensi dalam penggunaan.</p>
                </div>
                <div class="informasi-item informasi-mahasiswa">
                    <img class="img-mahasiswa" src="assets/img/5.png" alt="Mahasiswa">
                    <h2>Informasi Mahasiswa</h2>
                    <p>Mahasiswa kami berasal dari berbagai latar belakang yang beragam dan memiliki semangat tinggi untuk belajar dan berkembang. Kami berkomitmen untuk memberikan pengalaman pendidikan yang terbaik bagi setiap mahasiswa.</p>
                </div>
            </section>
        </main>
    </div>
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>Kami adalah penyedia layanan foto, video, dan produk yang berkomitmen untuk memberikan kualitas terbaik dan harga yang terjangkau. Kami berpengalaman dalam meningkatkan branding image perusahaan melalui visual yang menarik.</p>
            </div>
            <div class="footer-section contact">
    <h2>Kontak Kami</h2>
    <p>Nonny (Sales Manager)
WhatsApp/Telp:
0896 466 733 63
Yunita(Sales Manager)
WhatsApp/Telp:
0896 466 733 43</p>
    <div class="social-icons">
        <a href="https://www.instagram.com/sinaralamstudio/">
            <img src="assets/img/ig.jpeg" alt="Instagram"></a>
        <a href="https://wa.me/+6282328387654?text=Selamat datang di admin sinar alam studio">
            <img src="assets/img/wa.jpeg" alt="WhatsApp"></a>
        <a href="https://facebook.com/akmal_symm">
            <img src="assets/img/facebook.jpeg" alt="Facebook"></a>
    </div>
</div>

            <div class="footer-section address">
                <h2>Alamat</h2>
                <p>Jl. Bau Massepe No.156, Kp. Baru, Kec. Bacukiki Bar., Kota Parepare, Sulawesi Selatan 91121</p>
                <li><a href="https://maps.app.goo.gl/5uyHAJyPNBqrFJQL8">Share Location</a>
            </div>
            <div class="footer-section articles">
                <h2>Artikel</h2>
                <ul>
                    <li><a href="#">Tips Memilih Layanan Foto Profesional</a></li>
                    <li><a href="#">Bagaimana Menentukan Harga Jasa Video</a></li>
                    <li><a href="#">Manfaat Foto Produk untuk Bisnis Anda</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Layanan Jasa Foto, Video, dan Produk</p>
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
