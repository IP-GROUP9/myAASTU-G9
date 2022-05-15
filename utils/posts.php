<?php
include('db.php');

function get_posts() {
    global $conn;
    $result = $conn->query("SELECT * FROM post");
    return $result->fetch_assoc();
}

function get_post($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM post WHERE id = $id");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}
