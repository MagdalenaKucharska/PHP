<?php

define('FILENAME', 'data.txt');           // definicja stałej
require_once 'functions.php';            // dołączenie pliku 


//php todo_list.php add "Testowe zadanie";

// var_dump($argv);

//$data = [null, null, null];
$data = array_fill(0, 3, null);         // funkcja tworząca tablice (początkowy indeks, ilość elementów do stworzenia oraz wartość, jaką otrzyma każdy element)
$argv = array_replace($data, $argv);    // zastąpoenie pustych elementów wartościami z tablicy $argv
// $fileName = $argv[0];
// $command = $argv[2];
// $content = $argv[3];
// var_dump($argv);
[$fileName, $command, $content] = $argv; // przypisanie wartośći z tablicy do zmiennych zawatych na liście 

// if (isset($argv[1])) {       //sprawdzenie czy drugi element tablicy istnieje 
//     echo $argv[1];
// } else {
//     echo 'List';
// }

switch ($command) {
    case 'add':
        echo 'Add TODO';
        break;
    case 'remove':
        echo 'Remove TODO';
        break;
    case null:
        //echo 'List';
        $tasks = readFromFIle();
        foreach ($tasks as $number => $task) {
            echo ($number + 1) . ' | ' . $task . PHP_EOL;
        }
        echo '-------------' . PHP_EOL . 'Wszytskich zadań: ' . count($tasks);
        //var_dump($task);
        break;
    default:
        echo 'Sorry, invalid command!';
        break;
}
echo "\n";
