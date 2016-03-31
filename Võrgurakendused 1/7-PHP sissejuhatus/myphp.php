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













<a href="http://validator.w3.org/check?uri=referer">
	<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
	<img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>


</body>
</html>