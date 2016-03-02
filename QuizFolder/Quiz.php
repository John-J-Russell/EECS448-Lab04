<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$q1=$_POST["q1"];
	$q2=$_POST["q2"];
	$q3=$_POST["q3"];
	$q4=$_POST["q4"];
	$q5=$_POST["q5"];
	$numCorrect=0;
	if($q1=="T")
	{
		$numCorrect++;
	}
	if($q2=="Purple")
	{
		$numCorrect++;
	}
	if($q3=="Bargain")
	{
		$numCorrect++;
	}
	if($q4=="Gang")
	{
		$numCorrect++;
	}
	if($q5=="Beans")
	{
		$numCorrect++;
	}
	echo $numCorrect;
	
?>