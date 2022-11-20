<?php
	require_once "Shape.class.php";

	abstract class Polygon extends Shape
	{
		abstract function getNumberOfSides();
	}
?>