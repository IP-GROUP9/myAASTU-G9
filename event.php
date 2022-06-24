<?php include_once('utils/init.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once("head.php"); ?>
	<title>Events</title>
</head>

<body>
	<?php include_once("nav.php"); ?>
	<span id="top"></span>
	<main class="container">
		<a href="#top" class="top">&uarr;</a>
		<!-- main body -->
		<div class='post-head'>
			<h2>Events</h2>
			<?php
			if (isset($_SESSION['user']) and $_SESSION['user']['username'] == 'admin') {
				echo "<a href='create-event.php'><button class='btn'>Add Event</button></a></div>";
			}
			?>
		</div>
		<a href="#week">This Week</a> |
		<a href="#month">This month</a> |
		<a href="#year">This year</a>
		<hr size="1" color="lightblue">
		<h2 id="week">Events happening this week</h2>
		<?php
		include('utils/events.php');
		$events = get_events();
		foreach ($events as $key => $event) {
			echo "
		<div class='event-card'>
			<img src='{$event['cover_pic']}' height='250' alt='description of the seminar'>
			<div style='width: 100%'>
			<div class='post-head'>
			<h3 class='event-title'>{$event['title']}</h3>
			";

			if (isset($_SESSION['user']) and $_SESSION['user']['username'] == 'admin') {
				echo "<a href='delete-event.php?event-id={$event['id']}'><button class='btn'>Delete</button></a>";
			}

			echo "
			</div>
				<h3 class='event-presenter'> By -{$event['eventHost']} </h3>
				<p>📅 {$event['eventData']} </p>
				<p>📌 <strong>in {$event['locations']}</strong></p>
				<p>{$event['descriptions']}</p>
			</div>
		</div>";
		}
		?>
		<h1 id="year">Major Events that happened this year</h1>
		<div>
			<h2 class="title">
				Graduation Day of 2013 G.C Students
			</h2>
			<h3 class="subtitle"> September 25, 2021</h3>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/8NkehDw98Z0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<img src="images/grad 1.jpg" width="350px" height="300" alt="graduation pic">
			<img src="images/grad 2.jpg" width="500px" height="250" alt="graduation pic">
			<img src="images/grad 3.jpg" width="350px" height="250" alt="a graduate student">
		</div>
		<div>
			<h2 class="title">
				Culture Day of 2013 G.C Students
			</h2>
			<h3 class="subtitle"> August 24, 2021</h3><br>
			<img src="images/cult 1.jpg" width="350px" height="300" alt="culture day pic">
			<video controls width="400" height="230">
				<source src="videos/cultureday.mp4" type="video/mp4">
			</video>
			<img src="images/cult 2.jpg" width="350px" height="300" alt="culture day pic">
		</div>
		<div>
			<h2 class="title">
				Color Day of 2013 G.C Students
			</h2>
			<h3 class="subtitle"> August 12, 2021</h3><br>
			<img src="images/color.jpg" height="350" alt="color day pic">
			<video controls width="400" height="230">
				<source src="videos/colorday.mp4" type="video/mp4">
			</video>
			<img src="images/color 2.jpg" width="350px" height="300" alt="color day pic">
		</div>
		<?php include_once('_posts.php') ?>
	</main>
	<?php include_once("footer.php"); ?>
</body>

</html>