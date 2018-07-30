<?php
	#Functions - Block of code that can be repetedly called

	/*
	 	- Camel Case - myFunction()
	 	- Lower Case - my_function()
	 	- Pascal Case - MyFunction() - Pārsvarā lieto priekš klasēm 
	*/
	

	 // Crate Simple Function
	function simpleFunction(){
		echo 'Hello World';

	}
	// Run Simple Function
	// simpleFunction();


	// Function with Param
	Function sayHello($name = 'World'){
		echo "Hello $name<br>";
	}

	// sayHello('Joe');
	// sayHello('Bob');

	// sayHello('Tim');


 	// Return Value
	Function addNumbers($num1, $num2){
		return $num1 + $num2;

	}

	//  echo addNumbers(2,3);

	 // By Reference

	 $myNum = 12;

	 function addFive($num){
	 	$num += 8; 

	 }

	 Function addTen(&$num){
	 	$num +=10; 
	 }
	
	 addFive($myNum);
	 echo "Value: $myNum <br>";

	 addTen($myNum);
	 echo "Value: $myNum <br>";

?>