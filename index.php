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
<div class="marquee-header">FEATURING TEAMS FROM</div>
<div class="marquee">
    <div class="marquee--inner">
        <span>
            <?php require __DIR__ . '/city-values.php'; ?>
        </span>
        <span>
            <?php require __DIR__ . '/city-values.php'; ?>
        </span>
    </div>
</div>
</body>

</html>