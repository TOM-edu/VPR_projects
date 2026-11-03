<?php
header("Content-Type: text/plain");
$age = 21;
var_dump($age);

$age = NULL;
var_dump($age);

unset($age);
var_dump($age);
