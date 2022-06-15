<?php
    $a = 20;
    $b = 30;
    $c = 10;
    echo '||||||||||||||||||||||Задание_1';
echo '<br>';
if ($a >= $b && $a >= $c){
    echo "$a";
} elseif ($b >= $a && $b >= $c){
    echo "$b";
} else { echo "$c";}
echo '<br>';

echo '||||||||||||||||||||Задание_2 ';

echo '<br>';

if ($a > $b && $a < $c || $a < $b && $a > $c){
    echo "$a";
}elseif ( $b > $a && $b < $c || $b < $a && $b > $c) {
    echo "$b";
}  elseif ($a == $b || $a == $c || $b == $c ){
    echo 'Ошибка';}
 else {echo "$c";}
echo '<br>';

 echo '|||||||||||||||||||||||Задание_3';

echo '<br>';
$x=readline("x=");
echo "Введите $x\n";

echo '<br>';

$y=readline("y=");
echo "your input is $y\n";

echo '<br>';
if($x > 0 && $y > 0){
    echo "первая четверть";
}elseif ($x>0 && $y<0){
    echo "вторая четверть";
}elseif ($x<0 && $y<0){
    echo "третья четверть";
}elseif ($x<0 && $y>0 ){
    echo "четвертая четверть";
}else { echo "координаты находяться на оси";}
echo '<br>';
echo '<br>';

echo "!!!! не знаю как сделать чтобы с клавиатуры вводилось, html нужен.. или я чтото упустил.";



