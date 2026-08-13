<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Halaman Utama - Home</title>

</head>

<body>


    <!-- Navigasi Menu -->

    <nav>

        <a href="index.php">Home</a> | 

        <a href="about.php">About</a> | 

        <a href="contact.php">Contact</a>

    </nav>

    <hr>


    <!-- Konten Utama -->

    <h1>Selamat Datang di Halaman Utama (Home)
</h1>

    <p>Ini adalah halaman depan dari website
berbasis PHP sederhana.</p>

    

    <?php

        $nama = "Pengunjung";

        echo "<p>Halo <strong>$nama</strong>,
selamat mengeksplorasi website ini!</p>";

    ?>


</body>

</html>