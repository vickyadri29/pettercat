<?php

include "connect.php";
$id = $_GET['id'];
$tampil = mysqli_query($connect, "SELECT * FROM datakucing WHERE id=$id");
$data = mysqli_fetch_array($tampil);

if (isset($_POST['edit'])) {
    if ($_FILES['foto']['size'] == 0) {
        $jenis = $_POST['jenis'];
        $jk = $_POST['jk'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $query = mysqli_query($connect, "UPDATE datakucing SET jenis_kucing='$jenis',jenis_kelamin='$jk', harga='$harga', deskripsi='$deskripsi' WHERE id=$id");
        header("Location: data.php");
    } else {
        $folder = './foto/';
        $name_h = $_FILES['foto']['name'];
        $rename = date('Hs') . $name_h;
        $sumber_h = $_FILES['foto']['tmp_name'];
        move_uploaded_file($sumber_h, $folder . $rename);

        $jenis = $_POST['jenis'];
        $jk = $_POST['jk'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];

        $update = mysqli_query($connect, "UPDATE datakucing SET jenis_kucing='$jenis',jenis_kelamin='$jk', harga='$harga', foto='$rename', deskripsi='$deskripsi' WHERE id=$id");
        header("Location: data.php");
    }
}


$jku = $data['jenis_kucing'];
$jke = $data['jenis_kelamin'];
$harga = $data['harga'];
$foto = $data['foto'];
$desk = $data['deskripsi'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
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
        <div id="input">
            <div id="penginputan">
                <H2>EDIT DATA</H2>
                <form method="POST" enctype="multipart/form-data" name="update" class="inputdata">
                    <table>
                        <tr>
                            <td>Jenis Kucing : </td>
                            <td><input type="text" name="jenis" value="<?= $jku; ?>"></td>
                        </tr>
                        <tr>
                            <td>Harga :</td>
                            <td><input type="number" name="harga" value="<?= $harga; ?>"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin : </td>
                            <td><input type="radio" name="jk" value="jantan" required <?php

                                                                                        if ($jke == "jantan") {
                                                                                            echo "checked";
                                                                                        } ?>>
                                Jantan
                                <input type="radio" name="jk" value="betina" required <?php
                                                                                        if ($jke == "betina") {
                                                                                            echo "checked";
                                                                                        } ?>>Betina
                            </td>
                        </tr>
                        <tr>
                            <td>Foto Kucing : </td>
                            <td><input type="file" name="foto" value="<?= $foto; ?>"></td>
                        </tr>
                    </table>
                    <tr>
                        <td><textarea name="deskripsi" cols="50" rows="8"><?= $desk; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="edit" value="Edit"></td>
                    </tr>
                </form>
            </div>
        </div>
    </main>
</body>

</html>