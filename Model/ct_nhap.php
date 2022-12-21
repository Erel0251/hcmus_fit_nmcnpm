<?php
    include "./db_connect.php";

    $sql = "SELECT *
            FROM ct_nhap";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$ct_nhap = array();

while ($row = $query->fetch()) {
    array_push($ct_nhap, $row);
}
?>