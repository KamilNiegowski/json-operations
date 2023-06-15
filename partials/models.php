<?php

function getUsers()
{
    $decodeDataJSON = json_decode(file_get_contents('dataset/users.json'), true);
    return $decodeDataJSON;
}

function addUser($data)
{
    $decodeDataJSON = getUsers();
    $decodeDataJSON[] = $data;
    file_put_contents('dataset/users.json', json_encode($decodeDataJSON));
}

function removeUser()
{
    $decodeDataJSON = getUsers();
    $idDoUsuniecia = $_POST['id'];

    foreach ($decodeDataJSON as $klucz => $rekord) {
        if ($rekord['id'] == $idDoUsuniecia) {
            unset($decodeDataJSON[$klucz]);
            break;
        }
    }
    file_put_contents('dataset/users.json', json_encode($decodeDataJSON));
}

function isUsernameUnique($username) {
    global $decodeDataJSON;

    foreach ($decodeDataJSON as $userData) {
        if ($userData['username'] === $username) {
            return false; // Znaleziono istniejącego użytkownika o takiej samej nazwie użytkownika
        }
    }

    return true; // Nazwa użytkownika jest unikalna
}
