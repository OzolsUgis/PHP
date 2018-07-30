<?php
	#Conditionals

	/*
		== - equal
		=== - string
		<
		>
		<=
		>=
		!=
		!==	
	*/

	/*
		$num = 4;

		if($num == 5){
			echo '5 passed';
		} elseif($num == 6){
			echo '6 passed';
		} else {
			echo 'Did not pass';
		}
    */

	#Nesting IF

		// $num = 2;
		
		/*

		if ($num > 4) {
			if ($num < 10) {
				echo '$num passed';
			}
		}
		
		/*
			Logical Operators 

				and &&
				or ||
				xor

		*/

			/*
				if ($num > 4 xor $num < 10) {
					  echo "$num passed";
			
				}
			*/


	#SWITCH

			$favColor = 'yellow'; 

			switch ($favColor) {
				case 'red':
					echo 'Your favourite color is red';
					break;
				case 'blue':
					echo 'Your favourite color is blue';
					break;
				case 'green':
					echo 'Your favourite color is green';
					break;
				default:
					echo 'Your favourite color is something else';
				
				
			}

?>


