<?php

	//error_reporting(E_ALL);
	//ini_set("display_errors", 1);
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
	//echo $numCorrect;
	
	echo "<link href=\"Quiz.css\" rel=\"stylesheet\" type=\"text/css\"/>";
	echo "<div id=\"results\">";
	echo "Question 1: PV=nR\"_\", what is \"_\"? <br>";
	echo "You said: " . $q1 . "<br>";
	echo "Correct answer: \"T\" <br> <br> ";

	echo "Question 2: Before being selectively bred by the Dutch, carrots used to be:<br>";
	echo "You said: " . $q2 . "<br>";
	echo "Correct answer: \"Purple\" <br> <br> ";
	
	echo "Question 3: In Spanish, the word \"ganga\" means: <br>";
	echo "You said: " . $q3 . "<br>";
	echo "Correct answer: \"Bargain\" <br> <br> ";

	echo "Question 4: In Spanish, the word \"Pandilla\" means: <br>";
	echo "You said: " . $q4 . "<br>";
	echo "Correct answer: \"Gang\" <br> <br> ";

	echo "Question 5: En inglés, qué es la significa de la palabra \"alubias\"? <br>";
	echo "You said: " . $q5 . "<br>";
	echo "Correct answer: \"Beans\" <br> <br> ";

	echo "Total score: " . $numCorrect . "/5 <br>";
	echo "That's " . ($numCorrect/5)*100 . "% <br>";

	if($numCorrect==5)
	{
		echo "<br>Congratulations, you aced this test. I hope you're proud.";
	}
	echo "</div>";
?>
