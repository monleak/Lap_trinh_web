<?php
	function my_autoloader($class) {
		require_once $class.'.class.php';
	}
	spl_autoload_register('my_autoloader');
	

	$myCollection = array();

	$r = new Regtangle;
	$r->width = 5;
	$r->heigth = 7;
	$myCollection[] = $r;
	unset($r);
	
	$t = new Triangle;
	$t->width = 5;
	$t->heigth = 7;
	$myCollection[] = $t;
	unset($t);
	
	$c = new Circle;
	$c->radius = 3;
	$myCollection[] = $c;
	unset($c);

	$c = new Color;
	$c->name = "blue";
	$myCollection[] = $c;
	unset($c);

	foreach($myCollection as $s)
	{
		if($s instanceof Shape)
		{
			print "Area: ".$s->getArea()."<br>\n";
		}
		if($s instanceof Polygon)
		{
			print "Sides: ".$s->getNumberOfSides()."<br>\n";
		}
		if($s instanceof Color)
		{
			print "Color: ".$s->name."<br>\n";
		}
		print "<br>\n";
	}
?>