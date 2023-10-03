<?php
require __DIR__ . '/data.php';
/*This foreach loop reaches every element of the $teams array for printing their values.*/
foreach ($teams as $teamName => $teamData) : ?>
    <tr>
        <td><?= $teamName; ?></td>
        <!--Using ucwords() for the following table entries in case any data is entered without proper capitalization.-->
        <td><?= ucwords($teamData['league']); ?></td>
        <!--The following if statement makes sure either to print year, if year exists in the array, and "Never" if the team has never won a championship (aww).-->
        <?php if ($teamData['last-time-champions'] !== null) : ?>
            <td><?= $teamData['last-time-champions']; ?></td>
        <?php else : ?>
            <td><?= "Never" ?></td>
        <?php endif; ?>
        <td><?= ucwords($teamData['city']); ?></td>
        <!--The following if statement prints the team's nickname if there is a 'nickname' key in their array, and "None" if there isn't.-->
        <?php if (array_key_exists('nickname', $teamData)) : ?>
            <td><?= ucwords($teamData['nickname']); ?></td>
        <?php else : ?>
            <td><?= "None"; ?></td>
        <?php endif; ?>
        <!--Using strtolower() and printing the substring of the url excluding "https://www.", and utilizing the whole url for the anchor href.-->
        <td><a href="<?= $teamData['url']; ?>"><?= strtolower(substr($teamData['url'], 12, -1)); ?></td>
    </tr>
<?php endforeach;
