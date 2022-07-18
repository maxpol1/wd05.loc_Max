<?php

//-----------1. Написать функцию, которая возводит число в указанную степень
echo '1 Написать функцию, которая возводит число в указанную степень';
//-------------!Незнал какой верный, поэтому написал 2 способа решения задачи.
echo '<br>';
echo '<br>';
function exponentiate($numb, $pow)
{

//    return  pow($numb, $pow);

    $result = 1;
    for ($i = 1; $i <= $pow; $i++) {

        $result *= $numb;
    }

    return $result;
}

print_r(exponentiate(5, 4));
echo "<br>";
echo "<br>";
//2. Написать функцию, которая проверяет, являются ли все буквы в строке строчными
echo '2 Написать функцию, которая проверяет, являются ли все буквы в строке строчными';
//-------------!Незнал какой лучше и правильнее, поэтому написал 2 способа решения задачи.
echo "<br>";
echo "<br>";

function checkFont($str)
{
    if ($str == strtolower($str)) {
//        $letters = 'Буквы в строке строчные';
        $letters = true;

    } else {
//        $letters = 'Невсе буквы в строке строчные';
        $letters = false;

    }
    return $letters;
}

print_r(checkFont('cnskjcnlxnalncanFFFFF'));
echo "<br>";
echo "<br>";
//Написать функцию, которая генерирует массив указанной длинны со случайными значениями
echo '3 Написать функцию, которая генерирует массив указанной длинны со случайными значениями';
echo "<br>";
echo "<br>";
function createRandomValuesArr($indicateTheLength)
{
    return $arr = array_fill(0, $indicateTheLength, random_bytes(10));
}

echo '<pre>';
print_r(createRandomValuesArr(10));
echo '</pre>';

echo "<br>";
echo "<br>";
//ф-ция, которая по номеру дня возвращает его название
echo '4 Ф-ция, которая по номеру дня возвращает его название';
echo "<br>";

function showDay($numb)
{
    $day = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
    foreach ($day as $key => $value) {
        if ($numb == 1) {
            return $day[0];
            break;
        } elseif ($numb == 2) {
            return $day[1];
            break;
        } elseif ($numb == 3) {
            return $day[2];
            break;
        } elseif ($numb == 4) {
            return $day[3];
            break;
        } elseif ($numb == 5) {
            print_r($day[4]);
            break;
        } elseif ($numb == 6) {
            return $day[5];
            break;
        } elseif ($numb == 7) {
            return $day[6];
            break;
        }
    }
}


print_r(showDay(5));
echo "<br>";
echo "<br>";

//Написать функцию которая выводит n-ое число Фибоначчи
echo 'Написать функцию которая выводит n-ое число Фибоначчи';
echo "<br>";
echo "<br>";
function outputsNumberFibonacci($value)
{
    if ($value == 0) {
        return 0;
    }
    if ($value == 1 || $value == 2) {
        return 1;
    } else {
        return $value - 1 + $value - 2;
    }
}

print_r(outputsNumberFibonacci(20));



