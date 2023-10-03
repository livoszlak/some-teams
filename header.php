<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Shade&family=Dosis:wght@300;700&display=swap" rel="stylesheet">
    <title>SOME TEAMS</title>
</head>

<body>
    <div class="header">
        <!--The header calls on teams.php to print out the total number of teams in the $teams array into the h1.-->
        <h1>SOME (<?php require __DIR__ . '/teams.php'; ?>) TEAMS</h1>
    </div>