<?php
include_once("utils/db.php");
$q = $_REQUEST['q'];
header("Content-Type: application/json");
if (empty($q))
    echo json_encode([]);
else {
    $stmt = $conn->prepare("SELECT * FROM post WHERE title LIKE CONCAT('%', ? ,'%')");
    $stmt->bind_param('s', $q);
    $stmt->execute();
    $result = $stmt->get_result(); 
    echo json_encode($result->fetch_all(MYSQLI_ASSOC));
}
