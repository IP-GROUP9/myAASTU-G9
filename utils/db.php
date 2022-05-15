<?php
$username = 'aastu';
$pwd = 'myaastu_pwd';
$host = 'localhost';
$db = 'myaastu';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($host, $username, $pwd, $db);
if ($conn->connect_error)
  die("Connection failed: " . $conn->connect_error);
