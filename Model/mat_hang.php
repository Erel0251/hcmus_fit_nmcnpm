<?php
    include "./db_connect.php";

    $sql = "SELECT *
            FROM mat_hang";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$mat_hang = array();

while ($row = $query->fetch()) {
    array_push($mat_hang, $row);
}
?>