<html>
	<?php
		include("display.php");
		HTMLheader();
		date_default_timezone_set("America/New_York");
		$now = time();
		//$nowDate = Date_create();
		//$now = $nowDate->setTime(6,0,0)->getTimestamp();
		//$now = $nowDate->setTime(8,59,59)->getTimestamp();
		//$now = $nowDate->setTime(9,0,0)->getTimestamp();
		//$now = $nowDate->setTime(11,0,0)->getTimestamp();
		//$now = $nowDate->setTime(15,0,0)->getTimestamp();
		//$now = $nowDate->setTime(19,59,59)->getTimestamp();
		//$now = $nowDate->setTime(20,0,0)->getTimestamp();
		//$now = $nowDate->setTime(20,1,0)->getTimestamp();
		//$now = $nowDate->setTime(23,58,0)->getTimestamp();

		
		$openTime = Date_create();
		$openTime->setTime(9,0,0);


		$closeTime = Date_create();
		$closeTime->setTime(20,0,0);
	?>

	<body>
		<?php 
			MainBanner(); 
		?>
		<div class= "history"> DH Hill Technology Assistance  </div>
		
		<div>
			<?php echo date("F d, o");?><br/>
			<?php echo date("g:i a");?>

			<?php 

			$openTimestamp = $openTime->getTimestamp();
			$closeTimestamp = $closeTime->getTimestamp();

			if ($now >= $openTimestamp & $now < $closeTimestamp){
				?>
				We Are Open
				<?php
			}
			else{
				echo "We Are Closed";
			} 
			?>

		</div>

	</body>
</html>