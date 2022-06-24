<?php
include_once('db.php');

function create_post($title, $body, $author_id, $cover_pic)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO post (title, body, author_id, cover_pic) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', $title, $body, $author_id, $cover_pic);
    $stmt->execute();
}

function get_posts($approved = 1)
{
    global $conn;
    $sql = "SELECT * FROM post Where approved = $approved";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function get_post($id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM post WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function update_post($id, $cover_pic, $title, $body)
{
    global $conn;
    $stmt = $conn->prepare("UPDATE post SET title=?, cover_pic=?, body=? WHERE id = ?");
    $stmt->bind_param('sssi', $title, $cover_pic, $body, $id);
    $stmt->execute();
}

function delete_post($id)
{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM post WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
}
function approve($id)
{
    global $conn;
    $conn->query("Update post set approved = true where id=$id");
}
