<?php 

include "connect.php";

$query = mysqli_query($connect, "SELECT * FROM datakucing");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
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
        <article class="data">
        <table border=2 class="tabledata">
            <tr>
                <th>No</th>
                <th>Jenis Kucing</th>
                <th>Jenis Kelamin</th>
                <th>Harga</th>
                <th>Foto Kucing</th>
                <th width="300px">Deskripsi</th>
                <th>Action</th>
            </tr>
        <?php 
        $no = 1;
        while($data = mysqli_fetch_array($query)){
            $tamabah=$no++;
        ?>
        <tr>
            <td><?= $tamabah; ?></td>
            <td><?= $data['jenis_kucing']; ?></td>
            <td><?= $data['jenis_kelamin']; ?></td>
            <td><?= $data['harga']; ?></td>
            <td><img src="foto/<?= $data['foto']; ?>" width="150"></td>
            <td width="300"><?= $data['deskripsi']; ?></td>
            <td><?= "<a href='edit.php?id=$data[id]'><img src='icon/edit.png' width='20px'></a>&nbsp &nbsp<a href='delete.php?id=$data[id]'><img src='icon/bin.png' width='20px'></a>";?></td>
        </tr>
        </div>
        <?php } ?>
        </table>
        </article>
    </main>
</body>
</html>