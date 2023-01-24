<!DOCTYPE html>
<html lang="en">

<head>
    <title>AZCom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="OIP.jpg" width="254">
            <h1 style="float: right;">AZCom Komputer</h1>
        </div>
        <div class="menu">
            <a href="index.php">Beranda</a> | <a href="katalog.php">Katalog</a>
        </div>
        <div class="content">
            Selamat Datang di toko AZCom Komputer
        </div>
        <?php
        require('data.php');
        ?>
    </div>
</body>

</html>