<?php include_once('utils/init.php') ?>
<html lang="en">

<head>
    <?php include_once("head.php"); ?>
    <title>myAASTU - Home</title>
</head>

<body>
    <?php include_once('nav.php'); ?>
    <div class="hero-image">
        <div class="hero-text">
            <h1>Explore <abbr title="Addis Ababa Science and Technology University">AASTU</abbr></h1>
            <h2>using this accessible and interactive site</h2>
            <p>Adapting to new environment is always difficult for new students. We are here to help you navigate and explore this environment by providing all <strong style="color: tomato;">information you need</strong> to know about AASTU.
            </p>
            <a href="about_aastu.php"><button id="cta"><span>Explore AASTU</span></button></a>
        </div>
    </div>
    <main class="container">
        <?php include_once('_posts.php') ?>
    </main>
    <?php include_once('footer.php'); ?>
</body>

</html>