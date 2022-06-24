<?php
include_once('utils/init.php');
if (!isset($_SESSION['user']))
    header('Location: login.php');

include_once("utils/events.php");
include_once('utils/util.php');
$title = array_get($_REQUEST, 'title');
$host = array_get($_REQUEST, 'host');
$desc = array_get($_REQUEST, 'desc');
$data = array_get($_REQUEST, 'data');
$location = array_get($_REQUEST, 'location');
$cover_pic = array_get($_FILES, 'cover_pic');
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($title))
        $error .= 'title is required<br>';
    else if (empty($desc))
        $error .= 'description is required<br>';
    else {
        $file = '';
        if ($cover_pic) {
            $file = 'images/events/' . basename($cover_pic['name']);
            if (!move_uploaded_file($cover_pic['tmp_name'], $file))
                $error .= 'unable to upload file<br>';
        } else
            $file = "images/event.png";
        if ($error == '') {
            create_event($title, $desc, $host, $data, $location, $file);
            header('Location: event.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('head.php') ?>
    <title>Create Post - myAASTU</title>
</head>

<body>
    <?php
    include_once('nav.php');
    ?>
    <main class="container center">
        <div class="card form-card">
            <h1>Create Post</h1>
            <form method="post" autocomplete="off" class="form-card" enctype="multipart/form-data">
                <input type="text" name="title" value="<?= $title ?>" placeholder="title" required>
                <input type="text" name="host" value="<?= $host ?>" placeholder="event host" required>
                <input type="text" name="data" value="<?= $data ?>" placeholder="event date" required>
                <input type="text" name="location" value="<?= $location ?>" placeholder="event location" required>
                <input type="hidden" name="MAX_FILE_SIZE" value="4200000">
                <label class="upload-label">
                    <input type="file" class="upload-button" name="cover_pic" />
                    ⤒ 🗃 upload cover picture
                </label>
                <textarea name="desc" placeholder="description" rows="10" required><?= $desc ?></textarea>
                <input type="submit" value="Create Event">
                <?php if ($error != '')
                    echo "<div class='error'>$error</div>"; ?>
            </form>
    </main>
    <?php include_once('footer.php') ?>
</body>

</html>