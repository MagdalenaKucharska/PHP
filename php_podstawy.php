<!-- <?php
        /* 
* @autor Magda 
*/

        /* Jeśli osoba o wieku $age jest pełnoletnia, 
wyświetl komunikat Adult!, a jeśli nie wyświetl Teenager!. 
Użyj else.*/

        echo 'Zadanie 1' . "\n" . 'Jeśli osoba o wieku \$age jest pełnoletnia, 
wyświetl komunikat Adult!, a jeśli nie wyświetl Teenager!. 
Użyj else.' . "\n";


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

        /*
Dana jest liczba 50. Zmniejszaj ją o 8 i wypisuj pomniejszoną wartość, 
ale tylko do momentu, gdy liczba ta będzie większa od 0. 
Użyj pętli for.
*/

        $number = 50;

        for ($number -= 8; $number > 0; $number -= 8) {
            echo "Liczba: " . $number . "\n";
        }



        /*
Korzystając z jednej pętli for oblicz sumę 
wszystkich liczb parzystych z zakresu od 0 do 100 
i wyświetl ją na ekranie. Dodatkowo policz ilość liczb 
parzystych większych od 50.
*/

        $naturalna = 0;
        $parzysta = 0;
        $suma = 0;
        $i50 = 0;

        for ($parzysta; $parzysta <= 100; $parzysta = 2 * (++$naturalna)) {
            //$parze = $parzysta + $parzysta;
            $suma += $parzysta;
            // echo $parzysta;
            // echo "\n";
            // echo "Suma liczb parzystych: " . $suma;
            // echo "\n";

            // $i++;
            // echo "Ilość liczb: " . $i . "\n";


            if ($parzysta > 50) {
                $i50++;
                //echo "Ilość liczb parzystych powyżej 50: " . $i50 . "\n";
            }
        }
        echo "Suma liczb parzystych od 0 do 100: $suma \n";
        echo "Ilość liczb parzystych większych od 50: $i50 \n";

        /* 
(Trudniejsze) Wykonaj tabliczkę mnożenia w postaci 
prostej tabeli. Przykładowy efekt, jaki należy uzyskać:
*/

        echo PHP_EOL;

        $czynnik1 = 1;
        $czynnik2 = 1;
        $iloczyn = 1;

        for ($czynnik1; $czynnik1 <= 10; ++$czynnik1) {
            //echo "Rząd: " . $czynnik1 . "\n";

            for ($czynnik2; $czynnik2 <= 10; $czynnik2++) {
                //echo $czynnik1 . "x" . $czynnik2 . "\n";

                $iloczyn = $czynnik1 * $czynnik2;
                echo $iloczyn . ' | ';
            }
            $czynnik2 = 1;
            echo "\n";
            //echo PHP_EOL;
        }

        /*
Dana jest liczba 50. Zmniejszaj ją o 8 i wypisuj 
pomniejszoną wartość, ale tylko do momentu, 
gdy liczba ta będzie większa od 0.
Wykorzystaj pętle while
*/

        $number = 50;
        $number -= 8;

        while ($number >= 0) {
            //$number -= 8;
            echo $number . "\n";
            $number -= 8;
        }

        /*
W tablicy $people podane są dane trzech uczniów: 
imię i nazwisko oraz rok urodzenia. 
Wypisz imiona i nazwiska wszystkich uczniów oraz 
ich łączny wiek. Skorzystaj z pętli foreach. 
Uwaga! Wiek, czyli informacja ile mają aktualnie lat. 
Informacji tej nie ma w tablicy, należy ją obliczyć.
*/

        $person = [
            'Jan' => [
                'surname' => 'Kowalski',
                'age' => 19
            ],
            'Adam' => [
                'surname' => 'Nowak',
                'age' => 20
            ]
        ];
        print_r($person);
        // var_dump($person);

        $people = [
            ['name' => 'Jan Kowalski', 'birth' => 1980],
            ['name' => 'Piotr Nowak', 'birth' => 1994],
            ['name' => 'Anna Kowalczyk', 'birth' => 1982]
        ];
        $currentYear = 2017;
        //var_dump($people);

        $age = 0;

        foreach ($people as $person) {
            echo $person['name'] . ', ' . "\n";
            $age += $currentYear - $person['birth'];
        }

        echo "Całkowity wiek: " . $age . "\n";

        /*
Wykorzystując dowolną pętlę oraz continue, 
przygotuj skrypt, który zsumuje wartość 
liczb nieparzystych z zakresu od 1 do 20.
*/

        $n = 0;
        $nieparzysta = 2 * $n + 1;
        $sum = 0;
        $start = 1;
        $stop = 20;

        for ($nieparzysta; $nieparzysta < $stop; $nieparzysta = 2 * (++$n) + 1) {
            if ($nieparzysta < $start) {
                continue;
            }
            //echo $nieparzysta . "\n";
            $sum += $nieparzysta;
        };
        echo 'Suma liczby nieparzystych: ' . $sum . "\n";

        /*Przy użyciu pętli foreach wyświetl imiona 
użytkowników z tablicy $users. Gdy wystąpi imię Marek, 
przerwij wykonywanie pętli.
*/
        $users = ['Jan', 'Jakub', 'Marek', 'Piotr'];

        foreach ($users as $user) {
            echo $user . "\n";
            if ($user === 'Marek') {
                break;
            }
        }
