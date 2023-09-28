<?php
/* another file should print out all the data into a nice html table. */
require __DIR__ . '/data.php'; ?>

<html>
<table>
<?php foreach ($teams as $team => $key) : ?>
    <th><?php echo $team ?></th>
</table>
</html>
