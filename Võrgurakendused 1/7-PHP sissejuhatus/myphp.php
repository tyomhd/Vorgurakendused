<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>PHP Sissejuhatus</title>


</head>
<body>


<?php
$text = "You can do it!";
function reverseText($revtext) {
    global $text;
    echo "Original text:  $text <br>";
    echo "Reversed text: ";
    for ($x = strlen($revtext) - 1; $x >= 0; $x--) {
        echo $revtext[$x];
    }
    echo "<br>";

    //echo "$fname Refsnes.<br>";
}
reverseText($text);

?>


</body>
</html>