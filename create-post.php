<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php') ?>
    <title>Create Post - myAASTU</title>
</head>

<body>
    <?php
    include('nav.php');
    $title = $_REQUEST['title'];
    $body = $_REQUEST['body'];
    $cover_pic = $_FILES['cover_pic'];
    ?>
    <main class="container center">
        <div class="card form-card">
            <h1>Create Post</h1>
            <form method="post" autocomplete="off">
                <input type="text" name="title" value="<?= $title ?>" placeholder="title" required>
                <input type="hidden" name="MAX_FILE_SIZE" value="1200000">
                <input type="file" name="cover_pi">
                <textarea name="body" placeholder="body" value="<?= $body ?>" required></textarea>
                <input type="submit" value="Create Post">
            </form>
                <?php
                include("utils/posts.php");
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    session_start();
                    if (!isset($_SESSION['user']))
                        header('Location: login.php');
                    $error = '';
                    if (empty($title))
                        $error .= 'title is required<br>';
                    else if (empty($body))
                        $error .= 'body is required<br>';
                    else {
                        $file = '';
                        if ($cover_pic) {
                            $file = basename($cover_pic['name']);
                            if (!move_uploaded_file($cover_pic['tmp_name'], "/images/cover_pic/$file"))
                                $error .= 'unable to upload file<br>';
                        }
                        create_post($title, $body, $_SESSION['user']['id'], $file);
                    }
                    if ($error != '')
                        echo "<div class='error'>$error</div>";
                }
                ?>
        </div>
    </main>
    <?php include('footer.php') ?>
</body>

</html>