<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="title">
        <h1>Petter Cat</h1>
        <p>Tempat Adopsi Kucing Terbaik Hanya Disini!</p>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="data.php">DATA</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="newcat.php">NEW CAT</a></li>
            </ul>
        </nav>
    </header>


    <main>
        <article id="kotak">
        <?php
        include "connect.php";
        $hewan = mysqli_query($connect, "SELECT * FROM datakucing");
    
        while ($hasil = mysqli_fetch_array($hewan)) {
        ?>
        <div id="gallery-result">
            <center><div class="crop">
            <img src="foto/<?php echo $hasil['foto']; ?>">
            </div>
            </center>
            <ul>
                <li class="jenis-kucing"><?php echo $hasil['jenis_kucing']; ?></li>
                <li><?php echo $hasil['jenis_kelamin']; ?></li>
                <li class="price">Rp.<?php echo $hasil['harga']; ?></li>
                <li class=desc><?php echo $hasil['deskripsi']; ?></li>
            </ul><br>
            <?= "<a href='adopsi.php?id=$hasil[id]' onclick='alert(`Adopsi Berhasil. Terima Kasih`)' class='adopt'>Adopsi</a>";?>
        </div>
        <?php }?>
        </article>
    </main>
</body>
</html>