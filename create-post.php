<?php
include('utils/init.php');
if (!isset($_SESSION['user']))
    header('Location: login.php');

include("utils/posts.php");
include('utils/util.php');
$title = array_get($_REQUEST, 'title');
$body = array_get($_REQUEST, 'body');
$cover_pic = array_get($_FILES, 'cover_pic');
$error = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        } else
            $file = "https://picsum.photos/id/" . rand(1, 300) . "/400/250";
            if ($error == '') {
            create_post($title, $body, $_SESSION['user']['id'], $file);
            header('Location: posts.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php include('head.php') ?>
        <title>Create Post - myAASTU</title>
    </head>
    
    <body>
        <?php
        include('nav.php');
    ?>
    <main class="container center">
        <div class="card form-card">
            <h1>Create Post</h1>
            <form method="post" autocomplete="off" class="form-card">
                <input type="text" name="title" value="<?= $title ?>" placeholder="title" required>
                <input type="hidden" name="MAX_FILE_SIZE" value="4200000">
                <label class="upload-label">
                    <input type="file" class="upload-button" name="cover_pic" />
                    ⤒ 🗃 upload cover picture
                </label>
                <textarea name="body" placeholder="body goes here... You can use markdown here" rows="10" required><?= $body ?></textarea>
                <input type="submit" value="Create Post">
                <?php if ($error != '')
                    echo "<div class='error'>$error</div>"; ?>
            </form>
    </main>
    <?php include('footer.php') ?>
</body>

</html>