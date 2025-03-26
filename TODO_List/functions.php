<?php

function readFromFIle(): array
{
    if (file_exists(FILENAME)) {
        //$data = file_get_contents('data.txt'); // odczytanie danych (które będą w formacie JSON) z pliku i zwrócenie gotowej tablicy
        $data = file_get_contents(FILENAME);
        if ($data) {
            return json_decode($data, true);
        }
    }
    return [];
}
