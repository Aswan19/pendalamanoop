<?php
require('hewan.php');
require('fight.php');
require('elang.php');
require('harimau.php');

$elang = new Elang("elang", 2, "terbang tinggi");
$harimau = new harimau("harimau", 4, "lari cepat");

var_dump($harimau);
var_dump($elang);

// 1. 
echo "<br>";
$elang->atraksi();
echo "<br>";
$harimau->atraksi();
