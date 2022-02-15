<?php
//1. Написать функция которая принимает три целых числа и возвращает большее из них, если числа равны, то любое из них
function int_check(int $a, int $b, int $c) : int {
    if ( ($a > $b) & ($a > $c) ) {
        echo $a;
        echo "<br>";
        return $a;
    } elseif ( ($b > $a) & ($b > $c) ) {
        echo $b;
        echo "<br>";
        return $b;
    } elseif ( ($a == $b) & ($a != $c) ) {
        echo $a;
        echo "<br>";
        return $a;
    } elseif ( ($b == $c) & ($a != $c) ) {
        echo $b;
        echo "<br>";
        return $b;
    } else {
        echo $c;
        echo "<br>";
        return $c;
    }
}

$x = int_check(1,2,3);

//2. Написать функцию, которая принимает число от 1 до 7 и возвращает день недели. Если число не входит в заданый диапазон, то возвращает сообщение об ошибке
function int_day(int $d) : int {
    if ($d == 1) {
        echo "Monday";
    } elseif ($d == 2) {
        echo "Tuesday";
    } elseif ($d == 3) {
        echo "Wednesday";
    } elseif ($d == 4) {
        echo "Thursday";
    } elseif ($d == 5) {
        echo "Friday";
    } elseif ($d == 6) {
        echo "Saturday";
    } elseif ($d == 7) {
        echo "Sunday";
    } else {
        echo "Вы ввели число больше 7";
    }
    echo "<br>";
    return $d;
}

$y = int_day(1);

//3. Написать функцию которая проверяет является ли число простым или нет(продвинутый уровень - использовтаь рекурсию)
// https://brestprog.by/topics/factorization/
function int_del(int $e) : int
{
    for ($x=2; $x <= sqrt($e); $x++) {
        if ($e % $x == 0) {
            echo "Число = ";
            echo $e;
            echo " : ";
            echo "Это простое число <br>";
            return 0;
        }
    }
    echo "Число = ";
    echo $e;
    echo " : ";
    echo "Это не простое число <br>";

    return int_del($e - 1);
}

$z = int_del(13001);

//4. Написать функцию которая рекурсивно выводит все делители переданого числа(для 21 это 7 и 3)
function int_del_arr (int $f) : int {
    for ($i = 1; $i < $f; $i++) {
        if ($f % $i == 0) {
            echo $i;
            echo "<br>";
        }
    }
    return 0;
}

$y = int_del_arr(22);