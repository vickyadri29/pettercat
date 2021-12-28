<?php

include "connect.php";

$id = $_GET['id'];
$result = mysqli_query($connect, "DELETE FROM datakucing WHERE id =$id");
header("Location: gallery.php");
?>