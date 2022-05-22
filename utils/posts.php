<?php
include('db.php');

function create_post($title, $body, $author_id, $cover_pic)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO post (title, body, author_id, cover_pic) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('sss', $title, $body, $author_id, $cover_pic);
    $stmt->execute();
}

function get_posts() {
    global $conn;
    $result = $conn->query("SELECT * FROM post");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function get_post($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM post WHERE id = $id");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}
