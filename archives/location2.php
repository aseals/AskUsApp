<?php $myProblem = $_GET["problem"];?>
<?php $myFloor = $_GET["floor"];?>

<html>
	<head>
		<title>Tech Assistance</title>
	</head>
	<body>
		<div> <?php echo $myProblem; ?> </div>
		<div> <?php echo $myFloor; ?> </div>
		<h1> Where Are You? </h1>
		<form action="details.php" method="get">
			<input type="hidden" name="location" value="At Printer" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="hidden" name="floor" value="<?php echo $myFloor ?>" />
			<input type="submit" value="At Printer" />
		</form>
		<form action="details.php" method="get">
			<input type="hidden" name="location" value="Computer Workstation" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="hidden" name="floor" value="<?php echo $myFloor ?>" />
			<input type="submit" value="Computer Workstation" />
		</form>
		<form action="details.php" method="get">
			<input type="hidden" name="location" value="Study Room A" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="hidden" name="floor" value="<?php echo $myFloor ?>" />
			<input type="submit" value="Study Room A" />
		</form>
		<form action="details.php" method="get">
			<input type="hidden" name="location" value="Study Room B" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="hidden" name="floor" value="<?php echo $myFloor ?>" />
			<input type="submit" value="Study Room B" />
		</form>
		<form action="details.php" method="get">
			<input type="hidden" name="location" value="East Wing" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="hidden" name="floor" value="<?php echo $myFloor ?>" />
			<input type="submit" value="East Wing" />
		</form>
		<form action="details.php" method="get">
			<input type="hidden" name="location" value="West Wing" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="hidden" name="floor" value="<?php echo $myFloor ?>" />
			<input type="submit" value="West Wing" />
		</form>
		<form action="details.php" method="get">
			<input type="hidden" name="location" value="Other" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="hidden" name="floor" value="<?php echo $myFloor ?>" />
			<input type="submit" value="Other" />
		</form>	
		<form action="details.php" method="get">
			<input type="hidden" name="location" value="I'm Not Sure" />
			<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
			<input type="hidden" name="floor" value="<?php echo $myFloor ?>" />
			<input type="submit" value="I'm Not Sure" />
		</form>				
	</body>
</html>