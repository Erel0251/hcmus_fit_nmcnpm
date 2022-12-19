<?php
include "../Model/db_connect.php";

?>

<?php

$MAHANG=$_GET['id'];
$conn->query("SET FOREIGN_KEY_CHECKS=0");
$sodong = $conn->exec(" DELETE FROM mat_hang WHERE `mat_hang`.MAHANG = '$MAHANG'");
$conn->query("SET FOREIGN_KEY_CHECKS=1");
header("Location: menu.php")



?>

