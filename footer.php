<!-- footer -->
<footer>
	<div class="container">
		<a href="contact.php">Contact Info</a> <br> &copy;2022 myAASTU 
		* Last Visted This site - 
		<?php 
			if (isset($last_visted))
				echo $last_visted;
			else
				echo "you never visted this site";
		?>
	</div>
</footer>