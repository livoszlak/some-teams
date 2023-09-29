<?php
require __DIR__ . '/data.php';

foreach ($teams as $team => $city) :
    $cityValues[] = $teams[$team]['city'];
endforeach;
