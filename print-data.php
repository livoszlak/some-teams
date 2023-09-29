<?php
/* another file should print out all the data into a nice html table. */
require __DIR__ . '/data.php'; ?>

<thead>
    <tr>
        <th>Team</th>
        <th>League</th>
        <th>Last championship win</th>
        <th>City</th>
        <th>Homepage</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($teams as $teamName => $teamData) : ?>
        <tr>
            <td><?= $teamName; ?></td>
            <td><?= $teamData['league']; ?></td>
            <td><?= $teamData['last-time-champions']; ?></td>
            <td><?= $teamData['city']; ?></td>
            <td><?= $teamData['url']; ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>