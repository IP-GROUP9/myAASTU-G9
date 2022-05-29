<?php
$sql = 'SELECT * FROM service';

$result = mysqli_query($conn, $sql);

$services = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

?>