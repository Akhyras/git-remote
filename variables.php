<?php

// Récupération des variables à l'aide du client MySQL
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();

$team_lflStatement = $mysqlClient->prepare('SELECT * FROM team_lfl');
$team_lflStatement->execute();
$team_lfl = $team_lflStatement->fetchAll();

$votesStatement = $mysqlClient->prepare('SELECT * FROM votes');
$votesStatement->execute();
$votes = $votesStatement->fetchAll();