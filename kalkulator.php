<?php

/**
 * @author Magdalena 
 */

//Zmienne
$operation = '*';
$number1 = 8;
$number2 = 4;

function operationAddition(float $number1, float $number2): float
{
    echo $number1 + $number2;
}

function operationSubstraction(float $number1, float $number2): float
{
    return $number1 - $number2;
}

function operationMultiplication(float $number1, float $number2): float
{
    return $number1 * $number2;
}

function operationDivision(float $number1, float $number2): float
{
    return $number1 / $number2;
}

function showResult(float $result)
{
    echo 'Wynik: ' . $result;
}

switch ($operation) {
    case '+':
        $result = operationAddition($number1, $number2);
        break;
    case '-':
        $result = operationSubstraction($number1, $number2);
        break;
    case '*':
        $result = operationMultiplication($number1, $number2);
        break;
    case '/':
        $result = operationDivision($number1, $number2);
        break;
};

//echo $result;

showResult($result);

///// Zadania /////
//// Zad 1 ////


echo "\n" . "\n" . 'Zadanie 1' . "\n" . 'Przygotuj własną funkcję o nazwie showHello wyświetlającą napis Hello world.' . "\n" . "\n";

function showHello()
{
    echo '~ Hello world' . "\n";
}

//wywołanie funkcji
showHello();

//// Zad 2 ////

echo "\n" . "\n" . 'Zadanie 2' . "\n" . 'Przygotuj funkcję showName wyświetlającą imię przekazane do niej jako argument.' . "\n" . "\n";

$name = 'Magda';

function showName($name)
{
    echo '~ Mam na imię ' . $name . "\n";
}

//wywołanie funkcji
showName($name);


//// Zad 2 ////

echo "\n" . "\n" . 'Zadanie 2' . "\n" . 'Napisz funkcję prepareCart sprawdzającą, czy klient może złożyć zamówienie o cenie $price, gdy stan jego konta wynosi $money. Zadeklaruj odpowiednie typy dla argumentów. Trzeci argument $promotion powinien być typu logicznego (prawda lub fałsz). Wartością domyślną w przypadku jego nieprzekazania powinno być false. W przypadku gdy promocja ma obowiązywać (true) od łącznej ceny zamówienia ($price) należy odjąć 10. Jeśli klient może dokonać zamówienia, wyświetl komunikat OK.' . "\n" . "\n";

$price = 52.90;
$money = 50;
$promotion = true;

function prepareCart(float $price, float $money, bool $promotion = false)
{
    if ($promotion === false) {
        $price = $price;
    } else {
        $price -= 10;
    }

    if ($price < $money) {
        echo '~ OK (Klient może dokonać zamówienia)' . "\n";
    } else {
        echo 'Nie możesz dokonać zamówienia' . "\n";
    }
}

//wywołanie funkcji
prepareCart($price, $money, $promotion);

//// Zad 3 ////

echo "\n" . "\n" . 'Zadanie 2' . "\n" . 'Stwórz funkcję isAdult zwracającą true, gdy osoba o wieku przesłanym przez argument jest dorosła lub false jeśli nie.' . "\n" . "\n";

$age = 25;

function isAdult($age): bool
{
    // if ($age > 18) {
    //     return true;
    // } else {
    //     return false;
    // }

    return $age >= 18;
}

//wywołanie funkcji
var_dump(isAdult($age));
//echo 'Dorosły? ' . isAdult($age);

echo "\n" . "\n" . 'Przygotuj funkcję rectangleArea obliczającą pole prostokąta o bokach $sideA i $sideB, przekazanych przez argumenty. Zwróć obliczone pole z funkcji i wyświetl. Nadaj odpowiednie typy dla argumentów oraz zwracanej wartości, zakładając, że będziemy operowali tylko na liczbach całkowitych.' . "\n" . "\n";

$sideA = 5;
$sideB = 3;

function rectangleArea($sideA, $sideB): int
{
    return $sideA * $sideB;
}

//wywołanie funkcji
var_dump(rectangleArea($sideA, $sideB));
//echo 'Dorosły? ' . isAdult($age);
