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
		<h1>Events</h1>
		<a href="#week">This Week</a> |
		<a href="#month">This month</a> |
		<a href="#year">This year</a>
		<hr size="1" color="lightblue">
		<h2 id="week">Events happening this week</h2>
		<div class="event-card">
			<img src="<?php include_once("utils/events.php");  getImg(1); ?>" height="250" alt="description of the seminar">
			<div>
				<h3 class="event-title"><?php include_once("utils/events.php");  getFrom(1, 'title'); ?>
				</h3>
				<h3 class="event-presenter"> By -<?php include_once("utils/events.php");  getFrom(1, 'eventHost');?> </h3>
				<p>📅 <?php include_once("utils/events.php");  getFrom(1, 'eventData');?>
				<p>📌 <strong>in <?php include_once("utils/events.php");  getFrom(1, 'locations');?></strong></p>
				<p><?php include_once("utils/events.php");  getFrom(2, 'descriptions'); ?>
				</p>
			</div>
		</div>
		<div class="event-card">
			<img src="<?php include_once("utils/events.php");  getImg(2); ?>" alt="Manyazewal eshetu">
			<div>
				<h3 class="event-title"><?php include_once("utils/events.php");  getFrom(2, 'title');?></h3>
				<h3 class="event-presenter"> By -<?php include_once("utils/events.php");  getFrom(2, 'eventHost');?></h3>
				<p>📅 <?php include_once("utils/events.php");  getFrom(2, 'eventData');?></p>
				<p>📌 <?php include_once("utils/events.php");  getFrom(2, 'locations');?></p>
				<p><?php include_once("utils/events.php");  getFrom(2, 'descriptions');?>
				</p>
			</div>
		</div>
		<h2 id="month">Events that happened this month</h2>
		<div class="event-card">
			<img src="<?php include_once("utils/events.php");  getImg(3); ?>" alt="squid game">
			<div>
				<h3 class="event-title">
				<?php include_once("utils/events.php");  getFrom(3, 'title');?>
				</h3>
				<h3 class="event-presenter"> By - <?php include_once("utils/events.php");  getFrom(3, 'eventHost');?></h3>
				<p>📅 Happened on <?php include_once("utils/events.php");  getFrom(3, 'eventData');?></p>
				<p>📌 <?php include_once("utils/events.php");  getFrom(3, 'locations');?></p>
				<p>
				<?php include_once("utils/events.php");  getFrom(3, 'descriptions');?>
				</p>
				</td>
			</div>
		</div>
		<div class="event-card">
			<img src="<?php include_once("utils/events.php");  getImg(1); ?>" alt="ahamenes event">
			<div>
				<br>
				<h3 class="event-title"><?php include_once("utils/events.php");  getFrom(4, 'title');?></h3>
				<h3 class="event-presenter"> By - <?php include_once("utils/events.php");  getFrom(4, 'eventHost');?></h3>
				<p>📅 Happened on <?php include_once("utils/events.php");  getFrom(4, 'eventData');?></p>
				<p>📌 <?php include_once("utils/events.php");  getFrom(4, 'locations');?></p>
				<p>
				<?php include_once("utils/events.php");  getFrom(4, 'descriptions');?>
				</p>
				</td>
			</div>
		</div>
		<div class="event-card">
			<img src="<?php include_once("utils/events.php");  getImg(1); ?>" alt="cassiopia event">
			<div>
				<h3 class="event-title"><?php include_once("utils/events.php");  getFrom(5, 'title');?></h3>
				<h3 class="event-presenter"> By -<?php include_once("utils/events.php");  getFrom(5, 'eventHost');?></h3>
				<p>📅 Happened on <?php include_once("utils/events.php");  getFrom(5, 'eventData');?></p>
				<p>📌 <?php include_once("utils/events.php");  getFrom(5, 'locations');?></p>
				<p>
				<?php include_once("utils/events.php");  getFrom(5, 'descriptions');?>
					<strong>Presented By - Cassiopia</strong>
				</p>
			</div>
		</div>

		<h1 id="year">Major Events that happened this year</h1>
		<div>
			<h2 class="title">
				Graduation Day of 2013 G.C Students
			</h2>
				<h3 class="subtitle"> September 25, 2021</h3>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/8NkehDw98Z0"
				title="YouTube video player" frameborder="0"
				allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
				allowfullscreen></iframe>
			<img src="<?php include_once("utils/events.php");  getImg(5); ?>" width="350px" height="300" alt="graduation pic">
			<img src="<?php include_once("utils/events.php");  getImg(6); ?>" width="500px" height="250" alt="graduation pic">
			<img src="<?php include_once("utils/events.php");  getImg(7); ?>" width="350px" height="250" alt="a graduate student">
		</div>
		<div>
			<h2 class="title">
				Culture Day of 2013 G.C Students
			</h2>
			<h3 class="subtitle"> August 24, 2021</h3><br>
			<img src="<?php include_once("utils/events.php");  getImg(8); ?>" width="350px" height="300" alt="culture day pic">
			<video controls width="400" height="230">
				<source src="<?php include_once("utils/events.php");  getImg(12); ?>" type="video/mp4">
			</video>
			<img src="<?php include_once("utils/events.php");  getImg(9); ?>" width="350px" height="300" alt="culture day pic">
		</div>
		<div>
			<h2 class="title">
				Color Day of 2013 G.C Students
			</h2>
			<h3 class="subtitle"> August 12, 2021</h3><br>
			<img src="<?php include_once("utils/events.php");  getImg(10); ?>" height="350" alt="color day pic">
			<video controls width="400" height="230">
				<source src="<?php include_once("utils/events.php");  getImg(13); ?>" type="video/mp4">
			</video>
			<img src="<?php include_once("utils/events.php");  getImg(11); ?>" width="350px" height="300" alt="color day pic">
		</div>
        <?php include_once('_posts.php') ?>
	</main>

	<?php include_once("footer.php"); ?>

</body>

</html>
