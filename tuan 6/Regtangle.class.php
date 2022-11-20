<?php
	require_once "Polygon.class.php";

	class Regtangle extends Polygon
	{
		public $width;
		public $heigth;

		public function getArea()
		{
			return ($this->width * $this->width);
		}

		public function getNumberOfSides()
		{
			return 4;
		}
	}
?>