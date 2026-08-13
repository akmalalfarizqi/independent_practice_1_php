<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Halaman About</title>

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

    <h1>Tentang Kami (About)</h1>

    <p>Kami sedang belajar membandingkan
cara kerja pengodingan di PHP dan Node.js.
</p>

    

    <?php

        $tahun = date('Y');

        echo "<p>Website ini dikembangkan pada
tahun <strong>$tahun</strong>.</p>";

    ?>


</body>

</html>