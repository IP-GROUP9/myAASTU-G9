<?php include_once('utils/init.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("head.php"); ?>
    <title>AASTU Gallery</title>
</head>

<body>
    <?php include_once("nav.php"); ?>
    <!-- main body -->
    <main class="container">
        <div class="gallary-header">
            <h1>Gallery of AASTU</h1>
            <?php include_once("pagination.php"); ?>
        </div>
        <div class="image-container">
            <?php
            for ($i=1; $i < 22; $i++) {
                echo "<img src='images/aastu/$i.jpg' alt='Image of AASTU' style='width:100%;text-align:center;'>";
            }?>
        </div>
    </main>
    <?php include_once("footer.php"); ?>
    <script src="js/siema.min.js"></script>
    <script>
        function setSlideNum() {
            document.querySelector('.slide-num').innerHTML = this.currentSlide + '/21';
        }
        const s = new Siema({
            selector: '.image-container',
            onInit: () => setSlideNum(),
            onChange: () => setSlideNum(),
        });
        document.querySelector('.prev').addEventListener('click', () => s.prev())
        document.querySelector('.next').addEventListener('click', () => s.next())

    </script>
</body>

</html>