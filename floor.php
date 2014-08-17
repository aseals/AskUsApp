<?php 
include("display.php");
$myProblem = $_GET["problem"];
?>

<html>
	<?php 
		HTMLheader(); 
	?>
	
	<body>
		<?php
			MainBanner();
		?>

	
		<div class= "history"> <a href="techhelp.php"> DH Hill Technology Assistance</a> | <?php echo $myProblem;?> </div>
		<h1> What Floor Are You On? </h1>

		<?php

		for ($i=0; $i <= 9; $i++) {
			?>
				<form id="floor<?php echo $i ?>" action="location.php" method="get">
					<input type="hidden" name="floor" value="<?php echo $i ?>" />
					<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
					<input class="nopicture" type="submit" value="<?php echo $floornames[$i]?>" />
					<div class="preview"> <?php echo $floortext[$i]?> </div>
				</form>

			<?php

		}

		?>
	</body>
</html>