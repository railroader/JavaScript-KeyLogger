<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/StyleSheet1.css" rel="stylesheet" />
</head>
<body>
       <h1> Thank you for entering, winners will be notified by email.</h1>
</body>
</html>

<?php

    

    session_start();    
 



    $myfile = fopen("recorder.txt", "a") or die("Unable to open file!");
	$txt = "Session id : " . session_id() . " Recorded at : " .date("h:i:sa") . "\n";

	fwrite($myfile, $txt);
	fclose($myfile);


    ?>
