<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Homework 11</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$host="localhost";
$user="test";
$pass="t3st3r123";
$db="test";
$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga");
mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));

$selecttable = "SELECT * FROM alikhach_loomaaed";
$result = mysqli_query($connection, $selecttable);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr>";
    echo "<th>id</th>";
    echo "<th>nimi</th>";
    echo "<th>vanus</th>";
    echo "<th>liik</th>";
    echo "<th>puur</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nimi']."</td>";
        echo "<td>".$row['vanus']."</td>";
        echo "<td>".$row['liik']."</td>";
        echo "<td>".$row['puur']."</td>";
        echo "</tr>";
     }
    echo "</table>";
} else {
    echo "Table is empty";
}

mysqli_close($connection);

?>
</body>
</html>
