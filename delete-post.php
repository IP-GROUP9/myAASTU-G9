<?php
include_once("utils/posts.php");
include_once("utils/util.php");

if (isset($_REQUEST['post_id']))
    delete_post($_REQUEST['post_id']);
header('Location: posts.php');
