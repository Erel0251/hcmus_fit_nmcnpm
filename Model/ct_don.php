<?php
    include "./db_connect.php";

    $sql = "SELECT *
            FROM ct_don";

$query = $conn->query($sql);
$query->setFetchMode(PDO::FETCH_ASSOC);

$ct_don = array();

while ($row = $query->fetch()) {
    array_push($ct_don, $row);
}
?>