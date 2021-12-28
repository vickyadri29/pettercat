<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Cat</title>
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
            <h2>INPUT KUCING PELIHARAAN</h2>
            <form method="POST" enctype="multipart/form-data" class="inputdata">
                <table>
                <tr>
                    <td>Jenis Kucing : </td>
                    <td><input type="text" name="jenis" placeholder="Contoh : Anggora"></td>
                </tr>
                <tr>
                    <td>Harga :</td>
                    <td><input type="number" name="harga" placeholder="Contoh : 200000"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin : </td>
                    <td><input type="radio" name="jk" value="jantan">Jantan
                    <input type="radio" name="jk" value="betina">Betina
                </td>
                </tr>
                <tr>
                    <td>Foto Kucing :</td>
                    <td><input type="file" name="foto"></td>
                </tr>
                <tr>
                    </table>
                    <td><textarea name="deskripsi" cols="50" rows="5" placeholder="Masukan Deskripsi"></textarea></td>
                </tr><br>
                <div class="btn">
                    <tr>
                    <td><input type="submit" name="submit" onclick="alert('Berhasil tersimpan')">
                    <input type="reset" name="reset">
                </td>
            </tr>
        </div>
    </div>
</form>

            <article>
                <img src="cats/kucing3.png" class="cats">
            </article>
        </div>
    </main>
</body>
</html>

<?php 

include "connect.php";

if (isset($_POST['submit'])) {
    $folder = './foto/';
    $name_h = $_FILES['foto']['name'];
    $rename = date('Hs').$name_h;
    $sumber_h = $_FILES['foto']['tmp_name'];
    move_uploaded_file($sumber_h, $folder.$rename);
    $insert = mysqli_query($connect, "INSERT INTO datakucing VALUES (NULL,'".$_POST['jenis']."','".$_POST['jk']."','".$_POST['harga']."','".$rename."','".$_POST['deskripsi']."')");
    // if ($insert) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal";
    // }
}

?>