<?php
session_start();
if (isset($_COOKIE['last_visted']))
    $last_visted = $_COOKIE['last_visted'];
setcookie('last_visted', date('d/m/Y H:i:s a'));
?>
