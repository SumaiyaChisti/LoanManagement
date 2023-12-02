<?php
include("components/conn.php");
mysqli_query($conn,"DROP TABLE $_POST[tableName]");
echo "ok";
?>