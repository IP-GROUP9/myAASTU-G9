<?php session_start(); ?>

<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>myAASTU - Home</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div class="hero-image">
        <div class="hero-text">
            <h1>Explore <abbr title="Addis Ababa Science and Technology University">AASTU</abbr></h1>
            <h2>using this accessible and interactive site</h2>
            <p>Adapting to new environment is always difficult for new students. We are here to help you navigate and explore this environment by providing all information you need to know about AASTU.
            </p>
            <a href="about_aastu.html"><button id="cta"><span>Explore AASTU</span></button></a>
        </div>
    </div> 
    <main class="container">
        <h1 id="headers">Posts</h1>
        <h2>Time Management Tips</h2>
        <p> To Do Lists are one of the most effective ways to stay on track. Record all the things you need to accomplish then focus on completing one task at a time. Don't forget to reward...<a href="articles/time_mgt.html">read
				more</a>
        </p>
        <h2>Top five reasons why you should consider joining AASTU </h2>
        <p>
            Addis Ababa Science and Technology University is recognized in Africa...<a href="articles/why_join_aastu.html"> read more</a>
        </p>
    </main>
    <?php include('footer.php'); ?>
</body>

</html>