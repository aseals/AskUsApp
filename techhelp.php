<html>
	<?php
		include("display.php");
		HTMLheader();
	?>

	<body>
		<?php 
			MainBanner(); 
		?>
		<div class= "history"> DH Hill Technology Assistance <?php echo $myProblem; ?> </div>
		<h1>What is the Problem?</h1>

		<?php
		/*$HillProblems = Array("Printing Problems", "Logging Into A Machine", "Computer Problems", "Creating Digital Media", "Other");*/

		$HillProblems = Array (
		0 => "Printing Problems",
		1 => "Logging Into A Machine",
		2 => "Computer Problems",
		3 => "Creating Digital Media",
		4 => "Other",
		);

		$problemtext = Array (
		0 => "Missing Print Job, Paper Jam, etc. ",
		1 => "Forgot Unity Password, GIS Login, etc. ",
		2 => "Software Assistance, Hardware Issues, etc.",
		3 => "Video Editing, Photoshop, Audio Studio, etc.",
		4 => "Any Other Tech Questions",
		);

		for ($i=0; $i <= 4; $i++) {
			?>
				<form action="floor.php" method="get">
					<input type="hidden" name="problem" value="<?php echo $HillProblems{$i}?>" />
					<input class="nopicture" type="submit" value="<?php echo $HillProblems{$i}?>" />
					<div class="preview"> <?php echo $problemtext[$i]?> </div>
				</form>

			<?php

		}
		
		/*foreach ($HillProblems as $problem){
			?>
			<form action="floor.php" method="get">
				<input type="hidden" name="problem" value="<?php echo $problem ?>" />
				<input class="nopicture" type="submit" value="<?php echo $problem ?>" />
				<div class="preview"> <?php echo $problemtext[$i]?> </div>
			</form>
		<?php
			}*/
		?>

	</body>
</html>
