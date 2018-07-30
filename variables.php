<?php
	
	
 	#Variables
	/*
		- Prefix $
		- Start with a letter or an underscore
		- Only letters, nummbers , underscores 
		- Case sensitive 

	*/

	#Data types 
	/*	
		Strings 
		Integers
		floats
		Booleans 
		Arrays
		Objects
		NULL
		Resource
	*/

	$output = 'Hello world!';
	$num1 = 4;
	$num2 = 10;
	$sum= $num1 + $num2;

	$string1 = 'Hello';
	$string2 = 'World!';
	$greeting = $string1 . ' ' . $string2;
	$greeting2 = "$string1 $string2";

	$string3 = 'They\'re Here';
	# $string3 = "They\"re Here";


	$floats1 = 4.4;
	$Bool1 = true;

	define('GREETING', 'Hello Everyone');


	echo GREETING;

?>