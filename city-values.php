<?php
require __DIR__ . '/data.php';
/*Creates an array containing only the city values from $teams.*/
foreach ($teams as $team => $city) :
    $cityValues[] = $teams[$team]['city'];
endforeach;
/*another array containing only the UNIQUE city values.
This can definitely be solved in a better way, but I can't think of how (yet!).*/
$uniqueCities = array_unique($cityValues);
/*Echoes the city names in uppercase (because it looked cooler in the marquee that way).*/
foreach ($uniqueCities as $city) : ?>
    <?= strtoupper($city) . ' - '; ?>
<?php endforeach;
