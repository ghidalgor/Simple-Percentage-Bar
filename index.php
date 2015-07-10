<?php 
include("includes/procFunctions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple/Percentage Bars by Gregory Hidalgo</title>
	<link rel="stylesheet" href="css/percentageBar.css">
</head>
<body>

	<header>
		<h1>Percentage Bars</h1>
		<p>Technologies: HTML5 - CSS - PHP</p>
	</header>

	<main id="main">

		<!-- Technologies -->
		<article class="categories border-all-round">
			<h2>Technologies</h2>
			<hr>

			<h4>PHP</h4>
			<?php 
				#coloBar(percentage,"CSS Rule");
				coloBar(85,"barRule1"); 
			?>

			<h4>HTML5</h4>
			<?php 
				coloBar(70,"barRule2"); 
			?>

			<h4>JAVASCRIPT</h4>
			<?php 
				coloBar(70,"barRule1"); 
			?>

		</article>


		<!-- Soccer -->
		<article class="categories border-all-round">
			<h2>Sports Team</h2>
			<hr>
			<h4>Real Madrid</h4>
			<?php 
				coloBar(85,"barRule1"); 
			?>

			<h4>Barcelona</h4>
			<?php 
				coloBar(85,"barRule2"); 
			?>

			<h4>Costa Rica ;-)</h4>
			<?php 
				coloBar(75,"barRule1"); 
			?>

		</article>

	</main>

	<footer>
		<p>By <a href="http://www.gregoryhidalgo.com" target="_blank">GregoryHidalgo.com</a></p>
		<p>By <a href="https://twitter.com/websoundcr" target="_blank">@websoundcr</a></p>
		<p><?php echo date("Y"); ?></p>
	</footer>

</body>
</html>