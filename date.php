<?php
	// echo date('d'); // Diena
	// echo date('m'); // Mēnesis 
	// echo date('Y'); // Gads 
	// echo date('l'); // Nedēļas diena d

	// echo date('Y/m/d'); // Gads/mēnesis/diena
	// echo date('m-d-Y'); // mēnesis-diena-gads

	// echo date('h'); // Stunda
	// echo date('i'); // Minūte
	// echo date('s'); // Sekunde 
	// echo date('a'); // AM vai PM

		#Set timezone

	date_default_timezone_get('Latvia/Riga');

	// echo date('h:i:sa');

	$timestamp = mktime(10, 14, 54, 9, 10, 1981);

	//echo $timestamp ;

	// echo date('m/d/Y h:i:sa', $timestamp);

	$timestamp2 = strtotime('7:00pm March 22 2016');
	$timestamp3 = strtotime('tomorrow');
	$timestamp4 = strtotime('next Sunday');
	$timestamp5 = strtotime('+2 Days');
	// echo $timestamp2;

	echo date('m/d/Y h:i:sa', $timestamp5);
?>