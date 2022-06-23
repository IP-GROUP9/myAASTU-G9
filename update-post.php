<?php include('utils/init.php');
if (!isset($_SESSION['user']))
    header('Location: login.php');

if (!isset($_REQUEST['post_id']))
    header('Location: /');

include('utils/posts.php');
include('utils/util.php');


$post = get_post($_REQUEST['post_id']);
// redirect if the post doesn't belong to user
if ($_SESSION['user']['id'] != $post['author_id'])
    header('Location: /');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = '';
    $title = $_REQUEST['title'];
    $body = $_REQUEST['body'];
    $cover_pic = array_get($_FILES, 'cover_pic');

    if (empty($title))
        $error .= 'title is required<br>';
    else if (empty($body))
        $error .= 'body is required<br>';
    else {
        if ($cover_pic) {
            $file = basename($cover_pic['name']);
            if (!move_uploaded_file($cover_pic['tmp_name'], "/images/cover_pic/$file"))
                $error .= 'unable to upload file<br>';
        } else
            $file = $post['cover_pic'];
        if ($error == '') {
            update_post($post['id'], $file, $title, $body);
            header('Location: posts.php');
        }
    }
    if ($error != '')
        echo "<div class='error'>$error</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php') ?>
    <title>Update Post - myAASTU</title>
</head>

<body>
    <?php
    include('nav.php');
    $title = array_get($_REQUEST, 'title', $post['title']);
    $body = array_get($_REQUEST, 'body', $post['body']);
    ?>
    <main class="container center">
        <div class="card form-card">
            <h1>Update Post</h1>
            <form method="post" autocomplete="off" class="form-card">
                <input type="text" name="title" value="<?= $title ?>" placeholder="title" required>
                <input type="hidden" name="MAX_FILE_SIZE" value="1200000">
                <label for="cover_pic">Cover Picture</label>
                <input type="file" name="cover_pic">
                <textarea name="body" placeholder="body goes here... You can use markdown here" rows="12" required><?= $body ?></textarea>
                <input type="submit" value="Update Post">
            </form>
    </main>
    <?php include('footer.php') ?>
</body>

</html>