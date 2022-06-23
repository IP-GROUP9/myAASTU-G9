<?php
include("utils/posts.php");
if (isset($_REQUEST['post_id']))
    delete_post($_REQUEST['post_id']);
header('Location: posts.php');
