<?php
require __DIR__ . '/data.php'; ?>

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
        <?php foreach ($teams as $teamName => $teamData) : ?>
            <tr>
                <td><?= $teamName; ?></td>
                <td><?= ucwords($teamData['league']); ?></td>
                <?php if ($teamData['last-time-champions'] !== null) { ?>
                    <td><?= $teamData['last-time-champions']; ?></td>
                <?php } else { ?>
                    <td><?= 'Never'; ?></td>
                <?php } ?>
                <td><?= ucwords($teamData['city']); ?></td>
                <?php if (array_key_exists('nickname', $teamData)) { ?>
                    <td><?= ucwords($teamData['nickname']); ?></td>
                <?php } else { ?>
                    <td><?= 'None'; ?></td>
                <?php } ?>
                <td><a href="<?= $teamData['url']; ?>"><?= strtolower(substr($teamData['url'], 12)); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>