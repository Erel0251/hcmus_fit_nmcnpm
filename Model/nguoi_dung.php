<?php
    include "./db_connect.php";

    $sql = "SELECT *
            FROM nguoi_dung";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$nguoi_dung = array();

while ($row = $query->fetch()) {
    array_push($nguoi_dung, $row);
}
?>