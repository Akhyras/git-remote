<?php

function displayAuthor(string $authorEmail, array $users): string
{
    foreach ($users as $user) {
        if ($authorEmail === $user['email']) {
            return $user['full_name'] . '(' . $user['age'] . ' ans)';
        }
    }

    return 'Auteur inconnu';
}

function isValidTeam_lfl(array $team_lfl): bool
{
    if (array_key_exists('is_enabled', $team_lfl)) {
        $isEnabled = $team_lfl['is_enabled'];
    } else {
        $isEnabled = false;
    }

    return $isEnabled;
}

function getTeam_lfl(array $team_lfl): array
{
    $valid_team_lfl = [];

    foreach ($team_lfl as $team_lfl) {
        if (isValidTeam_lfl($team_lfl)) {
            $valid_team_lfl[] = $team_lfl;
        }
    }

    return $valid_team_lfl;
}

function redirectToUrl(string $url): never
{
    header("Location: {$url}");
    exit();
}