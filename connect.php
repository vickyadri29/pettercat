<?php
$connect=new mysqli ("localhost", "root", "", "petter-cat");
if(!$connect) {
    echo "Koneksi Gagal";
    exit();
}
?>