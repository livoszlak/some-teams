<?php
require __DIR__ . '/header.php';
?>

<table>
    <thead>
        <tr>
            <th>TEAM</th>
            <th>LEAGUE</th>
            <th>LAST CHAMPIONSHIP WIN</th>
            <th>CITY</th>
            <th>NICKNAME</th>
            <th>HOMEPAGE</th>
        </tr>
    </thead>
    <tbody>
        <?php require __DIR__ . '/print-data.php'; ?>
    </tbody>
</table>
<div class="cities"><?php require __DIR__ . '/city-values.php'; ?></div>
</body>

</html>