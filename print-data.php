<?php
require __DIR__ . '/data.php'; ?>

<?php foreach ($teams as $teamName => $teamData) : ?>
    <tr>
        <td><?= $teamName; ?></td>
        <td><?= ucwords($teamData['league']); ?></td>
        <?php if ($teamData['last-time-champions'] !== null) : ?>
            <td><?= $teamData['last-time-champions']; ?></td>
        <?php else : ?>
            <td><?= "Never" ?></td>
        <?php endif; ?>
        <td><?= $teamData['city']; ?></td>
        <?php if (array_key_exists('nickname', $teamData)) : ?>
            <td><?= $teamData['nickname']; ?></td>
        <?php else : ?>
            <td><?= "None"; ?></td>
        <?php endif; ?>
        <td><a href="<?= $teamData['url']; ?>"><?= substr($teamData['url'], 12, -1); ?></td>
    </tr>
<?php endforeach ?>