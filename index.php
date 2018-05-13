<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>svg tests</title>
		<meta name="generator" content="Geany 1.27" />
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>
	<body>
		<div class="screen_layout" id="top_left"></div>
		<div class="screen_layout" id="top_right"></div>
		<div class="screen_layout" id="bottom_left">
			<?php
			include_once("./resources/fieldGenerator.php");
			
			$config = fieldGenerator::getNewConfig();

			$config->galaxy->type = fieldGenerator::GALAXY_FOUR_ARM_SPIRAL;
			$config->galaxy->starCount = 500;
			$config->galaxy->systemProbability = 70;

			$config->starSystem->habitableSystemsProbability = 30;
			$config->starSystem->maxPlanetCount = 20;
			$config->starSystem->moonProbability = 27;
			$config->starSystem->moonMaxCount = 6;
			$config->starSystem->moonMaxSize = 10;

			$playField = fieldGenerator::createPlayField($config);
			echo fieldGenerator::createSVG($playField, 1080, 590);			
			?>
		</div>
		<div class="screen_layout" id="bottom_right"></div>
		<?php
			echo fieldGenerator::createJSON($playField);
		?>
		<script type="text/javascript" src="js/libs/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="js/app_playfield.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>
