<?php include_once('utils/init.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("head.php"); ?>
    <title>myAASTU - Home</title>
</head>

<body>
    <?php include_once('nav.php'); ?>
    <?php
    include_once("lib/parsedown-1.7.4/Parsedown.php");
    $parsedown = new Parsedown;
    $parsedown->setSafeMode(true);

    if (isset($_REQUEST['post_id'])) {
        include_once('utils/posts.php');
        $post = get_post($_REQUEST['post_id']);
        $title = $post['title'];
        $id = $post['id'];
        $body = $parsedown->text($post['body']);
        $cover_pic = $post['cover_pic'];
        echo "
        <main class='container'>
        <div class='post-head'>
            <h2>$title</h2>";

            if (isset($_SESSION['user']) and $_SESSION['user']['id'] == $post['author_id']) {
                echo "<div><a href='update-post.php?post_id=$id'><button class='btn'>Update Post</button></a>
                <a href='delete-post.php?post_id=$id'><button class='btn'>Delete Post</button></a></div>";
            }
            echo "</div>
            <img src='$cover_pic' alt='cover pic'>
            <div class='content'>
                $body
            </div>
        ";
    } else {
        echo "
        <main class='container center'>
            <h2>Page not found</h2>
        ";
    }
    ?>
    </main>
    <?php include_once('footer.php'); ?>
</body>

</html>