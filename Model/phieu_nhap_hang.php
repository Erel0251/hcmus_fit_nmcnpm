<?php
    include "./db_connect.php";

    $sql = "SELECT *
            FROM phieu_nhap_hang";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$phieu_nhap_hang = array();

while ($row = $query->fetch()) {
    array_push($phieu_nhap_hang, $row);
}
?>