<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//-----|||||||||||||||||||№1. Найти все положительные элементы массива
echo '-----|||||||||||||||||||№1. Найти все положительные элементы массива';
echo '<br>';

$arr = [2, 4, -5, 12, -3, 1, 33, -15];

$values = [];

foreach ($arr as $v) {
    if ($v > 0)
        $values[] = $v;
}

 var_dump($values);

echo "<br>";
echo "<br>";
echo "<br>";
#|||||||||||||||||||||№2 найти элементы массива, которые больше
# .................среднеарифметического значения и вывести их ИНДЕКСЫ
echo "||||||||||||||||||---№2 найти элементы массива, которые больше
 среднеарифметического значения и вывести их ИНДЕКСЫ";
echo "<br>";
$mean = array_sum($arr)/count($arr);

echo "<br>";
echo "Среднее число значений массива: $mean";
echo "<br>";
echo "<br>";
echo "Индексы массива:";
echo "<br>";
foreach ($arr as $kye => $value){

    if ($value > $mean){

        echo "Ключ $kye";
    }
}

echo "<br>";
echo "<br>";
echo "<br>";

//||||||||||||||||||||| №3. Вывести элементы массива, которые больше предыдущего
echo "Элементы массива больше предыдущих:";
echo "<br>";
for ($i = 1; $i < count($arr); $i++){
    if ($arr[$i] > $arr[($i-1)]) {

        echo "$arr[$i] ";
    }
}
echo "<br>";
echo "<br>";
echo "<br>";
//|||||||||||||||||||||| №4. Определить , есть ли в массиве  повторяющиеся элементы
  $un = array_unique($arr);

//  var_dump($un);

    if(count($un) < count($arr)){

        echo "Есть повторяющиеся элементы";

    }else {
        echo "Нету повторяющихся элементов";
    }

//|||||||||||||||||   №5. Удалить в массиве элементы, которые встречаются более двух раз
   $arr2 =[];
    foreach (array_count_values($arr) as $key => $value){
        if($value > 2){
            $arr2[]  += $key;
        }
    }
    $arr3 = array_diff($arr, $arr2);

    echo "<br>";
    echo "<br>";

//|||||||||||||||||   №6.Определите, является ли массив двумерным


if (count($arr) != count($arr, COUNT_RECURSIVE)) {

    echo "Массив многомерный";
} else {
    echo "Массив одномерный";

}

//if (in_array( 1, $arr5)){
//    echo "Массив многомерный";
//}else {
//    echo "Массив не многомерный";
//}




?>


<section style=" display: flex;justify-content: center; margin-top: 15px;max-width: 1170px;">
    <style>
        td {padding: 5px;text-align: center; color: #020375}
    </style>
    <table>
        <?php
        //||||||||||||||||||  №7. Вывести таблицу умножения. ДЗ сдаём через гит, через pull request
        $fromMultiplier = 10;
        $beforeMultiplier = 10;

        for ($firstM = 1; $firstM <= $fromMultiplier; $firstM++) {

            echo '<tr>';

            for ($secondsM = 1; $secondsM <= $beforeMultiplier; $secondsM++) {

                echo  '<td>', $secondsM * $firstM, ' |','</td>';
            }

        }

        ?>
    </table>

</section>





</body>
</html>

