<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	//Nested for loop, probably.
	echo "<table>";
	for($y=1; $y <=100; $y= $y+1)
	{
		echo "<tr>";
		for($x=1; $x <= 100; $x= $x+1)
		{
			echo "<td>" . $x*$y . "</td>";
		}
		echo "</tr>";
	}







?>
