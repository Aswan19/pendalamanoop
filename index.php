<?php
require('hewan.php');
require('fight.php');
require('elang.php');
require('harimau.php');

$elang = new Elang("elang", 2, "terbang tinggi", 10, 5);
$harimau = new harimau("harimau", 4, "lari cepat", 7, 8);

// 1. atraksi
$elang->atraksi();
echo "<br>";
$harimau->atraksi();
echo "<br><br>";

// 2. serang-diserang
echo "<br>" . $harimau->serang("elang");
echo "<br>" . $elang->serang("harimau") . "<br>";
echo "<br>" . $harimau->diserang();
echo "<br>" . $elang->diserang();

// 3. getInfoHewan
echo "<br>" . $elang->getInfoHewan();
echo "<br>" . $harimau->getInfoHewan();
