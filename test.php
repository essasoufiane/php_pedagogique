<?php
echo "<p> fichier test.php</p>";
// arrete le script en cas d'erreur
require("part1.php");

echo "<p>Toujours test.php</p>";
// n'arrete pas le script en cas d'erreur
include_once "part2.php";
include "part2.php";
