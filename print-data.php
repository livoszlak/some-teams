<?php
require __DIR__ . '/data.php';
//another file should print out all the data into a nice html table.

/*

echo "<tr>";
foreach ($teams as $k => $v) {
    echo "<th>" . $k . "</th>";
}
echo "</tr><tr>";

foreach ($teams as $league) {
    echo "<td>" . $league['league'] . "</td>";
}
echo "</tr><tr>";
foreach ($teams as $championYear) {
    echo "<td>" . $championYear['last-time-champions'] . "</td>";
}
echo "</tr><tr>";
*/

foreach ($teams as $k => $v) {
    echo $k;
}
