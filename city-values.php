<?php
require __DIR__ . '/data.php';

foreach ($teams as $team) :
    $cityValues[] = $team['city'];
endforeach;

$uniqueCities = array_unique($cityValues);

foreach ($uniqueCities as $city) : ?>
    <?= strtoupper($city) . ' - '; ?>
<?php endforeach;
