<?php
/* 
* @autor Magda 
*/

/* Jeśli osoba o wieku $age jest pełnoletnia, 
wyświetl komunikat Adult!, a jeśli nie wyświetl Teenager!. 
Użyj else.*/

$age = 22;
//$age = 15;

if ($age >= 18) {
    echo 'Adult!' . "\n";
} else {
    echo 'Teenager' . "\n";
};

// obliczenie pola kwadratu

$side = 5;
$area = $side ** 2;

if ($area === 25) {
    echo "Obliczone pole: $area \n";
};

/*
Podziel liczbę osób $people na 4-osobowe zespoły.
Jeżeli liczba osób będzie odpowiednia, wyświetl komunikat: 
Teams: [liczba zespołów].
Jeśli tylko jedna osoba pozostanie bez zespołu, wyświetl 
sam komunikat Too few people!.
W sytuacji, gdy zabraknie miejsca dla większej liczby ludzi, 
wypisz: Missing: [liczba brakujących osób do pełnego zespołu]. 
Skorzystaj z elseif. Podpowiedź: przypomnij sobie operator modulo.
*/

$people = 38;

if ($people % 4 === 0) {
    echo 'Teams: ' . ($people / 4) . "\n";
} elseif ($people % 4 === 1) {
    echo "Too few people!\n";
} else {
    echo "Missing: " . ($people % 4) . "\n";
};

/*
Przygotuj prosty kalkulator wykorzystujący switch. 
Wykonaj działanie określone w zmiennej 
$operation (+, -, *, /) na liczbach $number1 i $number2 
oraz wyświetl jego wynik. 
W przypadku niewybrania żadnego z podanych działań 
wyświetl komunikat Invalid operation
*/

$operation = '*';
$number1 = 6;
$number2 = 4;
$wynik;

switch ($operation) {
    case '*':
        echo "Wynik =" . ($number1 * $number2) . "\n";
        break;
    case '/':
        echo "Wynik =" . ($number1 / $number2) . "\n";
        break;
    case '+':
        echo "Wynik = " . ($number1 + $number2) . "\n";
        break;
    case '-':
        echo "Wynik =" . ($number1 * $number2) . "\n";
        break;
    default:
        echo 'Invalid operation' . "\n";
        break;
};

/*
Przerób kalkulator z ćwiczenia wyżej. 
tak, aby użyć match zamiast switch.
*/

$operation = '/';
$number1 = 6;
$number2 = 4;
$wynik;

echo match ($operation) {
    '*' => "wynik = " . ($wynik = $number1 * $number2) . "\n",
    '/' => "wynik = " . ($wynik = $number1 / $number2) . "\n",
    '+' => "wynik = " . ($wynik = $number1 + $number2) . "\n",
    '-' => "wynik = " . ($wynik = $number1 - $number2) . "\n",
    default => "Invalid operation" . "\n"
};
