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

// modifier un element du tableau
$fruits[4] = "mchmech";

// pour afficher le tableau de manière plus presentable
echo "<pre>";
print_r($fruits);
echo "</pre>";

// tableau 2D 3D
$toto = "soufiane";

$cuisine = [["fourchette",20,true],["assiète",50,false],["casserole",85,true],$toto];

var_dump($cuisine);

// affichier les elements des tableaux a plusieurs dimensions
var_dump($cuisine[1][0]);
// Die; exit('sortir'); les deux sont fait pour stopper le script

//------tableau assossiatife-----
// teableau multi dimension
$frameworks = [
    ["angular",'front',true],
    ["symfony",'full-stack',false],
    ["spring boot",'full-stack',false],
    
];
// tableau associatif
$frameworksAssoc = [
    ["name" => "angular", "dev" => 'front', "async" => true],
    ["name" => "symfony", "dev" => 'full-stack', "async" => false],
    ["name" => "spring boot", "dev" => 'full-stack', "async" => false]
    
];

var_dump($frameworksAssoc[2]["name"]);

// compter la longueur du tableau
echo count($frameworksAssoc);
?>
</body>
</html>
