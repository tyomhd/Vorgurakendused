 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="stiil.css">
<script src="myscripts.js"></script> 
<title>Title</title>
</head>
<body>
<h1>Võrgurakendused I esimene HTML lehekülg</h1>
	<p>Paneme pildi ka</p>
 	<img src="http://images.clipartpanda.com/cute-tortoise-clipart-cute-safari-turtle-vector-illustration-9631748.jpg" alt="Turtle image" width="500" height="400"> 

<div id="clockdiv">
    Days: <span class="days"></span><br>
    Hours: <span class="hours"></span><br>
    Minutes: <span class="minutes"></span><br>
    Seconds: <span class="seconds"></span>
</div>

	<?php
	include("counter.php");	
	?>

</body>
</html> 
