<?php
    include "./db_connect.php";

    $sql = "SELECT *
            FROM don_hang";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$don_hang = array();

while ($row = $query->fetch()) {
    array_push($don_hang, $row);
}
?>