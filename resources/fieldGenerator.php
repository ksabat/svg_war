<?php
class fieldGenerator {
	const GALAXY_TWO_ARM_SPIRAL_HORIZONTAL = 0;
	const GALAXY_TWO_ARM_SPIRAL_VERTICAL = 1;
	const GALAXY_FOUR_ARM_SPIRAL = 2;
	const GALAXY_TWO_ARM_BAR_SPIRAL = 3;
	const GALAXY_DWARF = 4;
	const GALAXY_ELLIPTICAL = 5;
	const GALAXY_RANDOM = -1;
	const GALAXY_UNDEFINED = 999999;
	const GALAXY_MIN_VALUE = self::GALAXY_TWO_ARM_SPIRAL_HORIZONTAL;
	const GALAXY_MAX_VALUE = self::GALAXY_ELLIPTICAL;

	const GALAXY_SIZE_SPIRAL_MIN = 70000;
	const GALAXY_SIZE_SPIRAL_MAX = 600000;
	const GALAXY_SIZE_DWARF_MIN = 1000;
	const GALAXY_SIZE_DWARF_MAX = 60000;
	const GALAXY_SIZE_ELLIPTICAL_MIN = 100000;
	const GALAXY_SIZE_ELLIPTICAL_MAX = 2000000;

	const STAR_COLOR_RED = 0;
	const STAR_COLOR_YELLOW = 1;
	const STAR_COLOR_WHITE = 2;
	const STAR_COLOR_BLUE = 3;
	const STAR_COLOR_UNDEFINED = 999999;
	const STAR_COLOR_MIN_VALUE = self::STAR_COLOR_RED;
	const STAR_COLOR_MAX_VALUE = self::STAR_COLOR_BLUE;

	const STAR_SIZE_AVERAGE = 0;
	const STAR_SIZE_GIANT = 1;
	const STAR_SIZE_DWARF = 2;
	const STAR_SIZE_SUPER_GIANT = 3;
	const STAR_SIZE_UNDEFINED = 999999;
	const STAR_SIZE_MIN_VALUE = self::STAR_SIZE_AVERAGE;
	const STAR_SIZE_MAX_VALUE = self::STAR_SIZE_SUPER_GIANT;

	const PLANET_TYPE_ROCKY = 0;
	const PLANET_TYPE_GAS = 1;
	const PLANET_TYPE_WATER = 2;
	const PLANET_TYPE_MIXED = 3;
	const
	 PLANET_TYPE_HABITABLE_ROCKY = 4;
	const PLANET_TYPE_HABITABLE_GAS = 5;
	const PLANET_TYPE_HABITABLE_WATER = 6;
	const PLANET_TYPE_HABITABLE_MIXED = 7;
	const PLANET_TYPE_UNDEFINED = 999999;
	const PLANET_TYPE_MIN_VALUE = self::PLANET_TYPE_ROCKY;
	const PLANET_TYPE_MAX_VALUE = self::PLANET_TYPE_MIXED;
	const PLANET_TYPE_HABITABLE_MIN_VALUE = self::PLANET_TYPE_HABITABLE_ROCKY;
	const PLANET_TYPE_HABITABLE_MAX_VALUE = self::PLANET_TYPE_HABITABLE_MIXED;

	const PLANET_TYPE_HABITABLE_MODIFIER = self::PLANET_TYPE_HABITABLE_MIN_VALUE;

	const PLANET_SIZE_AVERAGE = 1;
	const PLANET_SIZE_GIANT = 2;
	const PLANET_SIZE_DWARF = 0;
	const PLANET_SIZE_SUPER_GIANT = 3;
	const PLANET_SIZE_UNDEFINED = 999999;
	const PLANET_SIZE_MIN_VALUE = self::PLANET_SIZE_DWARF;
	const PLANET_SIZE_MAX_VALUE = self::PLANET_SIZE_SUPER_GIANT;


	static private function rollStarSystemPosition($config) {
		postion = array(
			x => 0,
			y => 0
		);

		switch ($config->galaxy->type) {
			case self::GALAXY_TWO_ARM_BAR_SPIRAL: {

					switch(mt_rand(1, 2)) {
						case 1: {
							break;
						};
						case 2: {
							break;
						};
					};
				break;
			};
			case self::GALAXY_TWO_ARM_SPIRAL: {
					switch(mt_rand(1, 2)) {
						case 1: {
							break;
						};
						case 2: {
							break;
						};
					};
				break;
			};
			case self::GALAXY_FOUR_ARM_SPIRAL: {
					switch(mt_rand(1, 2)) {
						case 1: {
							break;
						};
						case 2: {
							break;
						};
						case 3: {
							break;
						};
						case 4: {
							break;
						};
					};
				break;
			};
			case self::GALAXY_DWARF: {
				break;
			};
			case self::GALAXY_ELLIPTICAL: {
				break;
			};
		};

		return $position;
	}

	static private function rollPlanetSize() {
		$planetSize = mt_rand(1, 100);
		switch (true) {
			case in_array($planetSize, range(1, 50)) : {
				return self::PLANET_SIZE_AVERAGE;
				break;
			};
			case in_array($planetSize, range(51, 80)) : {
				return self::PLANET_SIZE_DWARF;
				break;
			};
			case in_array($planetSize, range(81, 90)) : {
				return self::PLANET_SIZE_GIANT;
				break;
			};
			case in_array($planetSize, range(91, 100)) : {
				return self::PLANET_SIZE_SUPER_GIANT;
				break;
			};
		};
	}

	static private function rollPlanetType($size, $habitable) {
		$planetType = mt_rand(1, 100);
		switch ($size) {
			case self::PLANET_SIZE_AVERAGE : {
				switch (true) {
					case in_array($planetType, range(1, 15)) : {
						return ($habitable === true) ? self::PLANET_TYPE_ROCKY + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_ROCKY;
						break;
					};
					case in_array($planetType, range(16, 20)) : {
						return ($habitable === true) ? self::PLANET_TYPE_GAS + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_GAS;
						break;
					};
					case in_array($planetType, range(21, 50)) : {
						return ($habitable === true) ? self::PLANET_TYPE_WATER + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_WATER;
						break;
					};
					case in_array($planetType, range(51, 100)) : {
						return ($habitable === true) ? self::PLANET_TYPE_MIXED + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_MIXED;
						break;
					};
				};
				break;
			};
			case self::PLANET_SIZE_DWARF : {
				switch (true) {
					case in_array($planetType, range(1, 50)) : {
						return ($habitable === true) ? self::PLANET_TYPE_ROCKY + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_ROCKY;
						break;
					};
					case in_array($planetType, range(51, 60)) : {
						return ($habitable === true) ? self::PLANET_TYPE_GAS + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_GAS;
						break;
					};
					case in_array($planetType, range(61, 75)) : {
						return ($habitable === true) ? self::PLANET_TYPE_WATER + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_WATER;
						break;
					};
					case in_array($planetType, range(76, 100)) : {
						return ($habitable === true) ? self::PLANET_TYPE_MIXED + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_MIXED;
						break;
					};
				};
				break;
			};
			case self::PLANET_SIZE_GIANT : {
				switch (true) {
					case in_array($planetType, range(91, 100)) : {
						return ($habitable === true) ? self::PLANET_TYPE_ROCKY + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_ROCKY;
						break;
					};
					case in_array($planetType, range(1, 60)) : {
						return ($habitable === true) ? self::PLANET_TYPE_GAS + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_GAS;
						break;
					};
					case in_array($planetType, range(61, 80)) : {
						return ($habitable === true) ? self::PLANET_TYPE_WATER + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_WATER;
						break;
					};
					case in_array($planetType, range(81, 90)) : {
						return ($habitable === true) ? self::PLANET_TYPE_MIXED + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_MIXED;
						break;
					};
				};
				break;
			};
			case self::PLANET_SIZE_SUPER_GIANT : {
				switch (true) {
					case in_array($planetType, range(1, 15)) : {
						return ($habitable === true) ? self::PLANET_TYPE_ROCKY + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_ROCKY;
						break;
					};
					case in_array($planetType, range(16, 60)) : {
						return ($habitable === true) ? self::PLANET_TYPE_GAS + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_GAS;
						break;
					};
					case in_array($planetType, range(61, 95)) : {
						return ($habitable === true) ? self::PLANET_TYPE_WATER + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_WATER;
						break;
					};
					case in_array($planetType, range(96, 100)) : {
						return ($habitable === true) ? self::PLANET_TYPE_MIXED + self::PLANET_TYPE_HABITABLE_MODIFIER : self::PLANET_TYPE_MIXED;
						break;
					};
				};
				break;
			};
		};
	}

	static private function rollStarSize() {
		$starSize = mt_rand(1, 100);
		switch (true) {
			case in_array($starSize, range(1, 45)) : {
				return SELF::STAR_SIZE_AVERAGE;
				break;
			};
			case in_array($starSize, range(46, 70)) : {
				return SELF::STAR_SIZE_DWARF;
				break;
			};
			case in_array($starSize, range(71, 95)) : {
				return SELF::STAR_SIZE_GIANT;
				break;
			};
			case in_array($starSize, range(96, 100)) : {
				return SELF::STAR_SIZE_SUPER_GIANT;
				break;
			};
		};
	}

	static private function rollStarColor($size) {
		$starColor = mt_rand(1, 100);
		switch ($size) {
			case self::STAR_SIZE_AVERAGE : {
				switch (true) {
					case in_array($starColor, range(1, 45)) : {
						return self::STAR_COLOR_YELLOW;
						break;
					};
					case in_array($starColor, range(46, 70)) : {
						return self::STAR_COLOR_WHITE;
						break;
					};
					case in_array($starColor, range(71, 90)) : {
						return self::STAR_COLOR_BLUE;

						break;
					};
					case in_array($starColor, range(91, 100)) : {
						return self::STAR_COLOR_RED;
						break;
					};
				};
				break;
			};
			case self::STAR_SIZE_DWARF : {
				switch (true) {
					case in_array($starColor, range(1, 45)) : {
						return self::STAR_COLOR_WHITE;
						break;
					};
					case in_array($starColor, range(46, 70)) : {
						return self::STAR_COLOR_BLUE;
						break;
					};
					case in_array($starColor, range(71, 90)) : {
						return self::STAR_COLOR_RED;
						break;
					};
					case in_array($starColor, range(91, 100)) : {
						return self::STAR_COLOR_YELLOW;
						break;
					};
				};
				break;
			};
			case self::STAR_SIZE_GIANT : {
				switch (true) {
					case in_array($starColor, range(1, 45)) : {
						return self::STAR_COLOR_RED;
						break;
					};
					case in_array($starColor, range(46, 70)) : {
						return self::STAR_COLOR_BLUE;
						break;
					};
					case in_array($starColor, range(71, 90)) : {
						return self::STAR_COLOR_YELLOW;
						break;
					};
					case in_array($starColor, range(91, 100)) : {
						return self::STAR_COLOR_WHITE;
						break;
					};
				};
				break;
			};
			case self::STAR_SIZE_SUPER_GIANT : {
				switch (true) {
					case in_array($starColor, range(1, 75)) : {
						return self::STAR_COLOR_RED;
						break;
					};
					case in_array($starColor, range(76, 95)) : {
						return self::STAR_COLOR_BLUE;
						break;
					};
					case in_array($starColor, range(96, 100)) : {
						return self::STAR_COLOR_YELLOW;
						break;
					};
				};
				break;
			};
		};
	}

	static public function createSVG($playField, $width, $height) {
		$svgBody = "";
		for ($counter = 0; $counter < count($playField->galaxy); $counter++) {
			$xOffset = $width / 2;
			$yOffset = $height / 2;

			$xPos = $xOffset + ($xOffset * ($playField->galaxy[$counter]->star->position->x / 100));
			$yPos = $yOffset + ($yOffset * ($playField->galaxy[$counter]->star->position->y / 100));

			$radius = $playField->galaxy[$counter]->star->size + 1;


			$color = array("red","yellow","white","blue")[$playField->galaxy[$counter]->star->color];

			$svgBody = $svgBody . "<circle class = 'test_circle' cx = '$xPos' cy = '$yPos' r = '$radius' fill = '$color' />";
		};

		$svgWhole = "<svg xmlns = 'http://www.w3.org/2000/svg' id='playfield' stroke='black' fill='white' width='$width' height='$height'>$svgBody</svg>";

		return $svgWhole;
	}

	static public function createJSON($playField) {
		return "
		<script>
			var ksPlayField = " . json_encode($playField, JSON_PRETTY_PRINT) . "
		</script>
		";
	}

	static public function getNewConfig() {
		$config = new stdClass();

		$config->galaxy->type = 0;
		$config->galaxy->size = 0;
		$config->galaxy->starCount = 0;
		$config->galaxy->systemProbability = 0;

		$config->starSystem->habitableSystemsProbability = 0;
		$config->starSystem->maxPlanetCount = 0;
		$config->starSystem->moonProbability = 0;
		$config->starSystem->moonMaxCount = 0;
		$config->starSystem->moonMaxSize = 0;

		return $config;
	}

	static public function createPlayField($config = null) {
		if (is_null($config)) {
			return false;
		};

		$playField = new stdClass();
		$playField->galaxy = null;

		for ($counter = 0; $counter < $config->galaxy->starCount; $counter++) {
			$playField->galaxy[$counter] = self::createStarSystem($config);
		};

		return $playField;
	}

	private static function getStarSystemObject() {
		$starSystem = new stdClass();
		$starSystem->star->size = self::STAR_SIZE_UNDEFINED;
		$starSystem->star->color = self::STAR_COLOR_UNDEFINED;
		$starSystem->star->position->x = 0;
		$starSystem->star->position->y = 0;
		$starSystem->planets = array();

		return $starSystem;
	}

	private static function getPlanetObject() {
		$planet = new stdClass();
		$planet->distance = 0;
		$planet->type = self::PLANET_TYPE_UNDEFINED;
		$planet->sizeDefinition = self::PLANET_SIZE_UNDEFINED;
		$planet->sizeValue = 0;
		$planet->habitable = false;
		$planet->moons = array();

		return $planet;

	}

	private static function habitableZoneSizeDistance($starSize) {
		$habitableZoneDefinition = new stdClass();
		$habitableZoneDefinition->min = null;
		$habitableZoneDefinition->max = null;

		switch($starSize) {
			case self::PLANET_SIZE_AVERAGE:
			{
				$habitableZoneDefinition->min = 35;
				$habitableZoneSizeDistance->max = 70;
				break;
			};
			case self::PLANET_SIZE_GIANT:
			{
				$habitableZoneDefinition->min = 1;
				$habitableZoneSizeDistance->max = 18;
				break;

			};
			case self::PLANET_SIZE_DWARF:
			{
				$habitableZoneDefinition->min = 40;
				$habitableZoneSizeDistance->max = 43;
				break;
			};
			case self::PLANET_SIZE_SUPER_GIANT:
			{
				$habitableZoneDefinition->min = 5;
				$habitableZoneSizeDistance->max = 9;
				break;
			};
		};

		return $habitableZoneSizeDistance;
	}

	private static function createStar($config) {
		$starSystem = self::getStarSystemObject();

		$starSystem->star->size = self::rollStarSize(); // mt_rand(self::STAR_SIZE_MIN_VALUE, self::STAR_SIZE_MAX_VALUE);
		$starSystem->star->color = self::rollStarColor($starSystem->star->size); // mt_rand(self::STAR_COLOR_MIN_VALUE, self::STAR_COLOR_MAX_VALUE);
		$starSystem->star->position->x = mt_rand(-100,100);
		$starSystem->star->position->y = mt_rand(-100,100);
		if (mt_rand(0, 100) < $config->galaxy->systemProbability) {
			$config->starSystem->habitableZoneDefinition = self::habitableZoneSizeDistance($starSystem->star->size); // need to address excluding non hab planets (in the empty else section of the second if)
			$starSystem->planets = self::createPlanets($config);
		};

		return $starSystem;
	}

	private static function createPlanets($config) {
		$planets = array();
		$habitable = true;
		$isHabitable = (mt_rand(0, 100) < $config->starSystem->habitableSystemsProbability) ? true : false;

		for ($planetCounter = 0; $planetCounter < $config->starSystem->maxPlanetCount; $planetCounter++) {
			$planets[$planetCounter] = self::getPlanetObject();
			$planets[$planetCounter]->sizeDefinition = mt_rand(self::PLANET_SIZE_MIN_VALUE, self::PLANET_SIZE_MAX_VALUE);
			$planets[$planetCounter]->sizeValue = mt_rand(($planets[$planetCounter]->sizeDefinition + 1) * 8, ($planets[$planetCounter]->sizeDefinition + 1) * 15);

			if (mt_rand(0, 100) < $config->starSystem->moonProbability) {
				$moonCount = mt_rand(1, ($config->starSystem->moonMaxCount * ($planets[$planetCounter]->sizeDefinition) + 1));
				for ($moonCounter = 0; $moonCount > $moonCounter; $moonCounter++) {
					$planets[$planetCounter]->moons[$moonCounter] = mt_rand(1, $config->starSystem->moonMaxSize);
				};
			};

			if($isHabitable === true && $habitable === true) {
				$planets[$planetCounter]->distance = mt_rand($habitableZoneSizeDistance->min, $habitableZoneSizeDistance->max) / 100;
				$planets[$planetCounter]->type = mt_rand(self::PLANET_TYPE_HABITABLE_MIN_VALUE, self::PLANET_SIZE_MAX_VALUE);
				$planets[$planetCounter]->habitable = true;
				$habitable = (mt_rand(1, 100) < 51) ? true : false;
			} else {
			$planets[$planetCounter]->distance = mt_rand(10, 100);
			$planets[$planetCounter]->type = mt_rand(self::PLANET_TYPE_MIN_VALUE, self::PLANET_TYPE_MAX_VALUE);
			};
		};
		return $planets;
	}

	private static function createStarSystem($config) {
		return self::createStar($config);
	}

	public function __construct() {

	}

}
