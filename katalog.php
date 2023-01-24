<!DOCTYPE html>
<html lang="en">

<head>
    <title>AZCom</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <div class="header">
                <img src="OIP.jpg" width="254">
                <h1 style="float: right;">AZCom Komputer</h1>
            </div>
            <a href="index.php">Beranda</a> | <a href="katalog.php">Katalog</a>
        </div>
        <div class="content">
            <form action="" method="POST">
                Pilih katalog :
                <select name="katalog">
                    <option value="hardware">Hardware</option>
                    <option value="software">Software</option>
                </select>
                <input type="submit" value="check" name="check">
                <hr>
                <?php

                if (isset($_POST['check'])) {
                    $select = $_POST['katalog'];

                    if ($select == 'hardware') {
                        $no = array(1, 2, 3, 4);
                        $nama = array('Monitor', 'CPU', 'Keyboard', 'Mouse');
                        $jenis = array('Hardware', 'Hardware', 'Hardware', 'Hardware');

                        $totalArray = count($no);

                        echo '<table border="1" cellpadding="3" cellspacing="0" width="300">';
                        echo '<tr>';
                        echo '<th>NO</th>';
                        echo '<th>Nama Produk</th>';
                        echo '<th>Jenis</th>';
                        echo '</tr>';

                        for ($i = 0; $i < $totalArray; $i++) {
                            echo '<tr>';
                            echo '<td>' . $no[$i] . '</td>';
                            echo '<td>' . $nama[$i] . '</td>';
                            echo '<td>' . $jenis[$i] . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>';
                    } elseif ($select == 'software') {
                        $no = array(1, 2, 3);
                        $nama = array('Windows OS', 'Linux OS', 'Mac OS',);
                        $jenis = array('Software', 'Software', 'Software');

                        $totalArray = count($no);

                        echo '<table border="1" cellpadding="3" cellspacing="0" width="300">';
                        echo '<tr>';
                        echo '<th>NO</th>';
                        echo '<th>Nama Produk</th>';
                        echo '<th>Jenis</th>';
                        echo '</tr>';

                        for ($i = 0; $i < $totalArray; $i++) {
                            echo '<tr>';
                            echo '<td>' . $no[$i] . '</td>';
                            echo '<td>' . $nama[$i] . '</td>';
                            echo '<td>' . $jenis[$i] . '</td>';
                            echo '</tr>';
                        }

                        echo '</table>';
                    }
                }
                ?>
            </form>
        </div>
        <?php
        include('data.php');
        ?>
    </div>
</body>

</html>