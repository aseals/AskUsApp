<?php 
	include("display.php"); 
	$myProblem = $_GET["problem"];
	$myFloor = $_GET["floor"];
?>

<html>
	<?php 
		HTMLheader(); 
	?>

	<body>
		<?php
			MainBanner();
		?>

	
		<div class= "history"> <a href="techhelp.php"> DH Hill Technology Assistance</a> | <?php echo $myProblem;?> | <?php echo $floornames[$myFloor]; ?> </div>
		<h1> Where Are You? </h1>

		<?php
		$GroundFloorSpots = Array("Hill of Beans Lounge", "Computer Workstation", "Work Tables", "Media Areas", "Other", "Not Sure");
		$FirstFloorSpots = Array("Front Lounge", "Mezzamine", "Learning Commons", "Digital Media Lab", "Special Collections", "Technology Sandbox", "Silent Reading Room", "West Wing", "Other", "Not Sure");
		$SecondFloorSpots = Array("At Printer", "Large Group Study Room", "East Wing", "West Wing", "Linux Machines", "Unity Lab", "Visualization Lab", "Group Study Area By Elevators", "West Wing", "Other", "Not Sure");
		$NinthFloorSpots = Array("At Printer", "Computer Workstation", "Group Study Area", "Other", "Not Sure");
		$TowerFloorSpots = Array("At Printer", "Computer Workstation", "Study Room A", "Study Room B", "Other", "Not Sure");

		if ($myFloor == 0){
			$myArray = $GroundFloorSpots;
		}
		else if ($myFloor == 1){
			$myArray = $FirstFloorSpots;
		}
		else if ($myFloor == 2){
			$myArray = $SecondFloorSpots;
		}
		else if ($myFloor == 9){
			$myArray = $NinthFloorSpots;
		}
		else {
			$myArray = $TowerFloorSpots;
		}


		foreach ($myArray as $location) {
			?>
				<form action="details.php" method="get">
					<input type="hidden" name="floor" value="<?php echo $myFloor ?>" />
					<input type="hidden" name="problem" value="<?php echo $myProblem ?>" />
					<input type="hidden" name="location" value="<?php echo $location ?>" />
					<input class="nopicture" type="submit" value="<?php echo $location ?>" />
				</form>
		<?php
			}
		?>
			
	</body>
</html>