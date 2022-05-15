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
			<?php include("pagination.php") ?>
		<div class="image-container">
		<?php
            for ($i=12; $i < 22; $i++) {
                echo "<img src='images/aastu/$i.jpg' alt='Image of AASTU'>";
            }
		?>
		</div>
		<!-- footer -->
	</main>
	<?php include("footer.php"); ?>

</body>

</html>