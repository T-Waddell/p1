<?php
$quote;

function quote() 
{
	$random = rand(0, 2);
	$quoteArray = [
		"If you can't explain it simply, you don't understand it well enough. (Albert Einstein)",
		"It is our choices...that show what we truly are, far more than our abilities. (J.K. Rowling)",
		"Happiness can be found, even in the darkest of times, if one only remembers to turn on the light. (J.K. Rowling)"
		];
	return $quoteArray[$random];
}

?>