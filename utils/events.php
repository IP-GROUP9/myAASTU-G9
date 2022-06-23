<?php
include_once('db.php');

function getFrom($id, $column)
{
    global $conn;
    $sql = "SELECT * FROM events  WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0)
    {
        while ($row = mysqli_fetch_assoc($result)){
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

    if($resultCheck > 0)
    {
        while ($row = mysqli_fetch_assoc($result)){
             echo $row['imgDir'];
        }
    }

}
