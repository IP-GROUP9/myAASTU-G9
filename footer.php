<!-- footer -->
<footer>
	<div class="container">
		<a href="contact.php">Contact Info</a> <br> &copy;2022 myAASTU 
		* Last Visted This site - 
		<?php 
			if (isset($_COOKIE['last_visted']))
				echo $_COOKIE['last_visted'];
			else
				echo "you never visted this site";
			setcookie('last_visted', date('d/m/Y H:i:s a'));
		?>
	</div>
</footer>