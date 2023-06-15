<?php

require_once 'models.php';

// Dodawanie nowego użytkownika
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['removeUser']) && isset($_POST['id'])) {
        removeUser();
        echo '<p>User has been deleted </p>';

    } elseif (isset($_POST['addNewUser'])) {
        $username = $_POST['username'];
        if (!empty($username) && !isUsernameUnique($username)) {
        echo '<p class="error">Nazwa użytkownika jest już zajęta. Wybierz inną nazwę.</p>';
        exit(); // Przerwij dodawanie użytkownika
    }
        $data = array(
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'address' => array(
                'street' => $_POST['addressStreet'],
                'zipcode' => $_POST['addressZipCode'],
                'city' => $_POST['addressCity']
            ),
            'phone' => $_POST['phone'],
            'company' => array(
                'name' => $_POST['companyName']
            )
        );




        addUser($data);
        echo '<p>User has been added</p>';

    }

    unset($_POST);
    header('Location: ' . $_SERVER['REQUEST_URI']);
    exit();
}

// Pobieranie danych użytkowników
$users = getUsers();

// Wyświetlanie widoku
require_once 'view.php';
