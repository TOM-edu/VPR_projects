<?php
header("Content-Type: text/plain");
$appleJuice = 'apple juice is made from apples.';
$grapefruitJuice = str_replace('apple', 'grapefruit', $appleJuice);
print $appleJuice . "\n";
print $grapefruitJuice . "\n";

print ucfirst($grapefruitJuice) . "\n";
print lcfirst($grapefruitJuice) . "\n";
print ucwords($grapefruitJuice) . "\n";
print strtoupper($grapefruitJuice) . "\n";
print strstr($grapefruitJuice, 'made') . "\n";
