<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number calculation and check </title>
</head>
<body>

<h2>basic php tutorial practice </h2>
<?php
//Check if the type of a variable is integer:
$x = 66;
var_dump(is_int($x));
$v = 12.78;
var_dump(is_int($v));

//Check if the type of a variable is float:

$a = 666.99;
var_dump(is_float($a));
//finit or infinite value
$x = 1.9e411;
var_dump($x);
echo "<br>";
//invalide calculation 
$x = acos(7);
var_dump($x);




?>

    
</body>
</html>