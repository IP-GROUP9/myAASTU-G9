<?php include_once('utils/init.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("head.php"); ?>
    <title>Approve post - Home</title>
</head>

<body>
    <?php include_once('nav.php'); ?>
    <main class="container">
        <!-- main body -->
        <h1>Approve Posts</h1>
        <?php
        include('utils/posts.php');
        $posts = get_posts(0);
        if ($posts) {
            echo '<table border=1 cellspacing=0 cellpadding=5 width="100%"><tr><th>Title</th><th>approve</th></tr>';
    
            foreach ($posts as $col => $value) {
                echo "<tr><td>{$value['title']}</td>";
                echo "<td><a href='admin/approve.php?id={$value['id']}'>approve</a></tr>";
            }
            echo '</table>';
        } else {
            echo "<p>All posts are approved</p>";
        }
        ?>
    </main>
    <?php include_once('footer.php'); ?>
</body>

</html>