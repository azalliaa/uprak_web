<?php
?>
<!DOCTYPE html>
<html>

<head>
    <title>Hitung Kubus</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">Selamat Datang Di Website Saya </div>
    <div class="container">
        <div class="sidebar">
            <h3>MENU</h3>
            <a href="index.html">Home</a>
            <a href="profile.html">Profile</a>
            <a href="media.html">Media Sosial</a>
            <a href="kubus.php">Hitung Kubus</a>
        </div>
        <div class="content">
            <h2>Hitung Volume Kubus</h2>
            <form method="post">
                <label for="sisi">Masukkan panjang sisi kubus:</label>
                <input type="number" name="sisi" required>
                <button type="submit">Hitung</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $sisi = $_POST['sisi'];
                $volume = pow($sisi, 3);
                echo "<p>Panjang sisi: $sisi</p>";
                echo "<p>Volume kubus: <b>$volume</b></p>";
            }
            ?>
        </div>
    </div>
    <div class="footer">SMK BAKTI NUSANTARA 666</div>
</body>

</html>