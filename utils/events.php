<?php
include_once('db.php');

function getFrom($id, $column)
{
    global $conn;
    $sql = "SELECT * FROM events  WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row[$column];
        }
    }
}
function getImg($id)
{
    global $conn;
    $sql = "SELECT * FROM images  WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            return $row['imgDir'];
        }
    }
}

function get_events()
{
    global $conn;
    $sql = "SELECT * FROM events";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function create_event($title, $desc, $host, $data, $location, $file) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO events (title, descriptions, eventHost, eventData, locations, cover_pic) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssss', $title, $desc, $host, $data, $location, $file);
    $stmt->execute();
}


function delete_event($id)
{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM events WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
}
