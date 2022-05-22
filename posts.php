<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>myAASTU - Home</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <main class="container">
        <!-- main body -->
        <h1 id="headers">Posts</h1>
        <?php
            include('utils/posts.php');
            $posts = get_posts();
            foreach ($posts as $_=>$post) {
                $title = $post['title'];
                $id = $post['id'];
                $body = substr($post['body'], 0, 100);
                $cover_pic = $post['cover_pic'];
                echo "
                <div class='card'>
                    <img src='$cover_pic' alt='cover pic' style='width:100%'>
                    <div class='content'>
                        <h2>$title</h2>
                        <p>$body ...<a href='posts.php?id=$id'>see more</a></p>
                    </div>
                </div>";
            }
        ?>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>