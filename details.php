<?php 
	include ("display.php");
	$myProblem = $_GET["problem"];
	$myFloor = $_GET["floor"];
	$myLocation = $_GET["location"];
?>

<html>
	<?php 
		HTMLheader(); 
	?>
	<body>
		<?php
			MainBanner();
		?>
		<div class= "history"> <a href="techhelp.php"> DH Hill Technology Assistance</a> | <?php echo $myProblem;?> | <?php echo $floornames[$myFloor]; ?> | <?php echo $myLocation; ?></div>
		<h1> More Information</h1>	
			<div class="details"> Please provide further information about your problem so we can come better prepared to assit you. </div>
			<form name="input" action="AskUsApp/response.php" method="post">
				<input type="hidden" name="floor" value="<?php echo $myFloor ?>" />
				<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
				<input type="hidden" name="location" value="<?php echo $myLocation ?>" />
				<textarea id="moreinfo" name="details" rows="10" cols="30" placeholder="Type details here..."></textarea>
				<input id="detailsubmit" type="submit" value="submit"/>
			</form>
	</body>
</html>