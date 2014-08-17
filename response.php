<?php 
include ("display.php");
$myProblem = $_POST["problem"];
$myFloor = $_POST["floor"];
$myLocation = $_POST["location"];
$myDetails = $_POST["details"];



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
<!--		<div> <?php echo $myProblem; ?> </div>
		<div> <?php echo $myFloor; ?> </div>
		<div> <?php echo $myLocation; ?> </div>
		<div> <?php echo $myDetails; ?> </div>-->

		<h1> Your request has been sent!</h1>
			
			<div> Please be on the lookout for a Ask Us assistant. They will be equipped with a black libraries t-shirt, a walkie-talkie, and name tag. <div>
			<br>
			<div> If nobody is avaiable to assist you within the next 5 minutes you will recieve an email including an estimated time of assistance<div>
			<br>
			<div> If you need to cancel this serivice or change your location please call us at: (919) 515-3364 <div>