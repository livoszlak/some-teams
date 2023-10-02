<?php
/* another file should print out all the data into a nice html table. */
require __DIR__ . '/data.php'; ?>


<?php foreach ($teams as $teamName => $teamData) : ?>
    <tr>
        <td><?= $teamName; ?></td>
        <td><?= $teamData['league']; ?></td>
        <td><?= $teamData['last-time-champions']; ?></td>
        <td><?= $teamData['city']; ?></td>
        <?php if (array_key_exists('nickname', $teamData)) : ?>
            <td><?= $teamData['nickname']; ?></td>
        <?php else : ?>
            <td><?= "None"; ?></td>
        <?php endif; ?>
        <td><a href="<?= $teamData['url']; ?>"><?= substr($teamData['url'], 12, strlen($teamData['url']) - 1); ?></td>
    </tr>
<?php endforeach; ?>