<?php
require __DIR__ . '/../some-teams/data.php';

foreach ($teams as $team => $city) :
    $cityValues[] = $teams[$team]['city'];
endforeach;

$uniqueCities = array_unique($cityValues);

foreach ($uniqueCities as $city) : ?>
    <?= strtoupper($city) . " - "; ?>
<?php endforeach;
