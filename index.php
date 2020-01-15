<!DOCTYPE html>
<?php
$budget = $_GET['budget'] ?? '';;
$players = $_GET['players'] ?? '';;
$mods = $_GET['mods'] ?? '';;

if (empty($mods) && !empty($players))
{
	$wildcards = (intval($players) / 2) - 1;
}
if (!empty($mods) && !empty($players))
{
	$wildcards = $mods;
}
else
{
	$players = 2;
	$wildcards = 1;
}
if(!empty($budget))
{
	$budgets = $players;
}
else
{
	$budgets = 1;
}
?>
<html lang="en">
<head>
	<title>Random PC Build Generator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form" action="#">
				<span class="contact100-form-title">
					<img src="https://camo.githubusercontent.com/ee7af20c0bc1c11605b5d8c30667a53fbf68ca98/68747470733a2f2f692e696d6775722e636f6d2f597136455834582e706e67" alt="Colonel Rudy vs JackRabbott PC Build-off" width="100%">
					<span class="focus-input100"></span>
				</span>
				
				<div class="wrap-input100">
				
					<span class="label-input100">Case Size</span> 
					<?php 
						$int= mt_rand(1,7);
						$arrX = array("Micro-ATX","Mid-ATX","Full-ATX","Super-ATX","Cube","Tristellar","Quadstellar","Any Case");
						$randIndex = array_rand($arrX);
						echo $arrX[$randIndex];
					?>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100">
				
					<span class="label-input100">Max RAM</span> 
					<?php 
						$int= mt_rand(1,8);
						$arrX = array("2GB","2GB","4GB","6GB","8GB","12GB","16GB","Unlimited");
						$randIndex = array_rand($arrX);
						echo $arrX[$randIndex];
					?>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100">
				
					<span class="label-input100">Max VRAM</span> 
					<?php 
						$int= mt_rand(1,8);
						$arrX = array("2GB","2GB","3GB","4GB","8GB","11GB","16GB","Unlimited");
						$randIndex = array_rand($arrX);
						echo $arrX[$randIndex];
					?>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100">
				
					<span class="label-input100">Budget</span> 
					<?php 
						if($budgets == 1)
						{
							$budget = mt_rand(1250,8500);
							echo "$" . $budget;
						}
						else
						{
							for ($j=0; $j<$budgets; $j++) {
							$budget = mt_rand(1250,8500);
							echo "<br/>Player " . ($j +1 ) . ": $" . $budget;
							}
						}
					?>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100">
				
					<span class="label-input100">Modifier(s)</span> 
					<?php 
						
						for ($i=0; $i<$wildcards; $i++) {
						$random = mt_rand(1,$players);
						$arrX = array(
						"Player $random can only use ROG parts",
						"Player $random can only use ASUS parts",
						"Player $random can only use AMD CPUs",
						"Player $random can only use 5th gen Intel CPUs",
						"Player $random can only use 6th gen Intel CPUs",
						"Player $random can only use 7th gen Intel CPUs",
						"Player $random can only use 8th gen Intel CPUs",
						"Player $random can only use 9th gen Intel CPUs",
						"Player $random can only use i3 Intel CPUs",
						"Player $random can only use i5 Intel CPUs",
						"Player $random can only use i7 Intel CPUs",
						"Player $random can only use i9 Intel CPUs",
						"Player $random can only use Intel Pentium CPUs",
						"Player $random can only use quad core CPUs",
						"Player $random can only use six core CPUs",
						"Player $random can only use eight core Intel CPUs",
						"Player $random can only use AMD GPUs",
						"Player $random can only use AMD GPUs/CPUs",
						"Player $random can only use NVIDIA GPUs",
						"Player $random must use an AIO",
						"Player $random has to make a custom WC loop",
						"Player $random must use an aircooler",
						"Player $random cannot use Crossfire/SLI",
						"Player $random must use a B450 chipset",
						"Player $random must use a Z390 chipset",
						"Player $random must use all RGB parts",
						"Player $random cannot include any RGB",
						"Player $random may only use cards under 6GB VRAM",
						"Player $random may only use cards under 4GB VRAM",
						"Player $random may only use cards under 3GB VRAM",
						"All players must use Intel Pentium CPUs"
						);
						
						$randIndex = array_rand($arrX);
						echo "<br />" . ($i + 1) . ": ";
						echo $arrX[$randIndex];
						}
?>
					<br />
					<span class="label-input100">
					<br />
					Modifiers may be ignored for part of a build if previous conditions do not allow that modifier.</span> 
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a href="#"><button class="contact100-form-btn">
							<span>
								Compliment Daniel's White Vans
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button></a>
					</div>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
