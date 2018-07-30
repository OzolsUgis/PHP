<?php
	#substr()
	#Returns a portion of a string 

	// $output = substr('Hello', 1, 3);
	// $output = substr('Hello', -2);

	// echo $output;

	#strlen
	#  Return the lenght of a string

	// $output = strlen('Hello World');
	// echo $output;
	
	#strpos()
	# Finds the position of the first occurence of a sub string
	
	// $output = strpos('Hello World', 'o');
	// echo $output;

	#strrpos()
	# Finds the position of the first occurence of a sub string
	
	// $output = strrpos('Hello World', 'o');
	// echo $output;

	#trim()
	#Strips whitespace

	// $text = 'Hello World               ';
	// var_dump($text);

	// $trimmed = trim($text);
	// var_dump($trimmed);

	#strtoupper
	# Makes everything uppercase

	// $output = strtoupper('Hello World');
	// echo $output;

	#strtolower
	# Makes everything lowercase

	// $output = strtolower('Hello World');
	// echo $output;
	
	#ucwords
	#Capitalize every word

 	// $output = ucwords('hello world');
 	// echo $output;

	#str_replace()
	# Replace all occurences of a search string with a replacement, 1 = what we search for, 2 = what we want to replace with, 3 = where to search

	// $text = 'Hello World';
	// $output = str_replace('World', 'Everyone', $text);
	// echo $output;

	#is_string()
	# Check if string 

	// $val = 'Hello';
	// $output = is_string($val);

	// echo $output;

	// $values = array(true, false, null, 'abc', 33 , '33', 22.4, '22.4','',' ',0,'0' );

	// foreach ($values as $value ) {
		// if (is_string($value)) {
			// echo "{$value} is a string<br>";
		// }
	// }
	
	# gzcompress()
	# Compress a string 

	$string = 
	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dapibus eget sapien at tristique. Sed sed finibus risus, sit amet mattis nunc. Donec accumsan ipsum ac urna iaculis, at viverra libero commodo. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris quis fermentum metus. Suspendisse ac suscipit tellus. Etiam lorem velit, mollis sed felis non, vehicula molestie libero. Nunc elementum accumsan nisl, sed venenatis diam congue vitae. Nam erat nulla, tempus et sem ut, fermentum posuere metus. Fusce fringilla sapien eu leo convallis efficitur. Nulla dapibus malesuada risus ac laoreet. Donec ac hendrerit metus.";

	$compressed = gzcompress($string);
	// echo $compressed;

	$original = gzuncompress($compressed);
	echo $original;

?>