<?php if(isset($_REQUEST['id'])) {
    include("../utils/posts.php");
    approve($_REQUEST['id']);
    header('Location: /');
}
