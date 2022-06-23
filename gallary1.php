<?php include('utils/init.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php"); ?>
    <title>AASTU Gallery</title>
</head>

<body>
    <?php include("nav.php"); ?>
    <!-- main body -->
    <main class="container">
        <div class="gallary-header">
            <h1>Gallery of AASTU</h1>
            <?php include("pagination.php"); ?>
        </div>
        <div class="image-container">
            <?php
            for ($i=1; $i < 22; $i++) {
                echo "<img src='images/aastu/$i.jpg' alt='Image of AASTU' style='width:100%;text-align:center;'>";
            }?>
            <img src="images/entranceexam3.png" alt="students taking tests">
            <img src="images/entranceexam2.png" alt="students taking tests">
            <img src="images/entranceexam1.png" alt="students taking tests">
        </div>
    </main>
    <?php include("footer.php"); ?>
    <script src="js/siema.min.js"></script>
    <script>
        const s = new Siema({
            selector: '.image-container'
        });
        document.querySelector('.prev').addEventListener('click', s.prev)
        document.querySelector('.next').addEventListener('click', s.next)

    </script>
</body>

</html>