<?php
require __DIR__ . '/data.php';

foreach ($teams as $team => $city) :
    $cityValues[] = $teams[$team]['city'];
endforeach;

$uniqueCities = array_unique($cityValues);

foreach ($uniqueCities as $city) : ?>
    <span class="city"><?= $city ?></span>
<?php endforeach; ?>