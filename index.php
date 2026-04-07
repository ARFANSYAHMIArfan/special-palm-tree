<?php
if(!isset($_GET['from_intro'])){
    header("Location: intro.php");
    exit;
}

$pageTitle = "Laman Utama";
include 'header.php';

include 'header.php';
?>

<div class="hero-box">
    <div class="hero-badge">Sistem Undian Digital Pintar</div>

    <h1>Selamat Datang ke VOTERA 2526: Undian Kelas Pintar 🔥</h1>

    <p class="hero-subtitle">
        Sistem undian digital moden untuk keunggulan kelas, pantas, selamat dan mudah digunakan.
    </p>

    <div class="hero-buttons">
        <a href="login.php" class="btn hero-btn">Log Masuk Pelajar</a>
        <a href="admin-login.php" class="btn hero-btn">Log Masuk Pentadbir</a>
        <a href="live-result.php" class="btn hero-btn">Lihat Kiraan Langsung</a>
    </div>
</div>

<?php include 'footer.php'; ?>