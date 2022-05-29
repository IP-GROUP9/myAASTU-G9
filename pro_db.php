
<?php

$conn = mysqli_connect('localhost','myaastu', 'myaastu', 'myaastu');
if ($conn->connect_error){
    die( "connection failed: ".$conn->connect_error );
}

?>