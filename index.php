<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=
 "hello!";
?></title>
</head>
<body>
<?php

$userName = "Omar";
$a = 4;
$b = 3;
$c = "<br>";

echo "Salam, je m'appelle " . $userName;
echo $c;
echo "J'ai " . $b . $a . " ans !";
echo $c;
echo "J'habite au " . $b . ($b+=$a) . " boulevard National";


$fruits = ["fraise","grenade","melon","fayka","abricot"];

var_dump($fruits);
print_r($fruits);
print_r("HelloMany");

echo "<pre>";
print_r($fruits);
echo "</pre>";
?>
</body>
</html>
