# Nazwa projektu

System zarządzania użytkownikami

## Opis

Projekt jest prostym systemem umożliwiającym dodawanie, usuwanie i wyświetlanie użytkowników. Dane użytkowników przechowywane są w pliku JSON.

## Struktura plików

```
│   index.php
├───assets
│   ├───css
│   │       styles.css
│   └───js
│           script.js
├───dataset
│       users.json
└───partials
        main.php
        view.php
        models.php
        controlers.php
 ```

- `index.php`: Główny plik programu. Odpowiada za wyświetlanie strony użytkowników oraz obsługę żądań HTTP.
- `styles.css`: Plik CSS zawierający style dla strony.
- `dataset/users.json`: Plik JSON przechowujący dane użytkowników.
- `partials/view.php`: Plik widoku, który wyświetla tabelę z listą użytkowników oraz formularz dodawania nowego użytkownika.
- `partials/models.php`: Plik modelu, który zawiera funkcje odpowiedzialne za operacje na danych użytkowników.
- `partials/controlers.php`: Plik kontrolera, który zawiera funkcje obsługujące żądania użytkownika.
- `partials/main.php`: Główny plik programu, który importuje `controllers.php` i wykonuje odpowiednie operacje na podstawie otrzymanego żądania.

Funkcjonalności:

1. Wyświetlanie listy użytkowników:
   - Pobiera dane użytkowników z pliku `users.json` przy użyciu funkcji `getUsers()` z pliku `partials/models.php`.
   - Wyświetla dane w formie tabeli za pomocą pliku `partials/view.php`.

2. Dodawanie nowego użytkownika:
   - Sprawdza, czy nazwa użytkownika jest unikalna przy użyciu funkcji `isUsernameUnique()` z pliku `partials/models.php`.
   - Dodaje nowego użytkownika do pliku `users.json` przy użyciu funkcji `addUser()` z pliku `partials/models.php`.

3. Usuwanie użytkownika:
   - Usuwa użytkownika z pliku `users.json` przy użyciu funkcji `removeUser()` z pliku `partials/models.php`.

Projekt składa się z powyższych plików i zapewnia podstawowe funkcje związane z zarządzaniem użytkownikami.


## Autorzy

Ten projekt został stworzony przez [KamilNiegowski](https://github.com/KamilNiegowski).

