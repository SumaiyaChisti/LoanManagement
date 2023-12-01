<?php
include('components/conn.php');
$sql = "SHOW TABLES LIKE 'campaign%'";
$result = $conn->query($sql);

$tables = [];
while ($row = $result->fetch_row()) {
    $tables[] = $row[0];
}

// Output table names

foreach ($tables as $tableName) {
    echo $tableName . "<br>";
}
?>