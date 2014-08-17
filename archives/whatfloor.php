<?php $myProblem = $_GET["problem"];?>

<html>
	<head>
		<title>Tech Assistance</title>
	</head>
	<body>
		<div> <?php echo $myProblem; ?> </div>
		<h1> What Floor Are You On? </h1>

		<?php

		for ($i=0; $i <= 9; $i++) {
			?>
				<form action="location.php" method="get">
					<input type="hidden" name="floor" value="<?php echo $i ?> Floor" />
					<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
					<input type="submit" value="<$php echo $i ?> Floor" />
				</form>
			<?php

		}

		$var = 0;
		while ($satisfied == false) {
			echo $var;

		}

		$myArray = Array(3, 4, 10, "kitten");

		foreach ($myArray as $item) {
			echo $item;

		}

		?>

		<form action="GroundFloorLocation.php" method="get">
			<input type="hidden" name="floor" value="Ground Floor" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="submit" value="Ground Floor" />
		</form>
		<form action="1stFloorlocation.php" method="get">
			<input type="hidden" name="floor" value="1st Floor" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="submit" value="1st" />
		</form>
		<form action="2ndFloorlocation.php" method="get">
			<input type="hidden" name="floor" value="2nd Floor" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="submit" value="2nd" />
		</form>
		<form action="location.php" method="get">
			<input type="hidden" name="floor" value="3rd Floor" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="submit" value="3rd" />
		</form>
		<form action="location.php" method="get">
			<input type="hidden" name="floor" value="4th Floor" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="submit" value="4th" />
		</form>
		<form action="location.php" method="get">
			<input type="hidden" name="floor" value="5th Floor" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="submit" value="5th" />
		</form>
		<form action="location.php" method="get">
			<input type="hidden" name="floor" value="6th Floor" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="submit" value="6th" />
		</form>
		<form action="location.php" method="get">
			<input type="hidden" name="floor" value="7th Floor" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="submit" value="7th" />
		</form>
		<form action="location.php" method="get">
			<input type="hidden" name="floor" value="8th Floor" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="submit" value="8th" />
		</form>
		<form action="9thFloorlocation.php" method="get">
			<input type="hidden" name="floor" value="9th Floor " />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="submit" value="9th" />
		</form>
	</body>
</html>
