<div class="post-head">
    <h1><a href="posts.php">Recents Posts</a></h1>
    <?php if (isset($_SESSION['user'])) { ?>
        <a href="create-post.php"><button class="btn">New Post</button></a>
    <?php } ?>
</div>

<div class="posts">
    <?php
    include('utils/posts.php');
    include('utils/util.php');
    include("lib/parsedown-1.7.4/Parsedown.php");
    $parsedown = new Parsedown;
    $parsedown->setSafeMode(true);

    $posts = get_posts();
    foreach ($posts as $_ => $post) {
        $title = $post['title'];
        $id = $post['id'];
        $body = $parsedown->text($post['body']);
        $cover_pic = $post['cover_pic'];
        echo "
        <div class='post'>
            <img src='$cover_pic' alt='cover pic'>
            <div class='content'>
                <h2><a href='post.php?post_id=$id'>$title</a></h2>
                <p>";
        printTruncated(120, $body);
        echo "...<a href='post.php?post_id=$id'>see more</a></p>
            </div>
        </div>";
    }
    ?>
</div>