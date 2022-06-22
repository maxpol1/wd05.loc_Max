<?php

//-----------------------------!!!!!!!Домашка в конце!!!!!!!!!

//!------------------------  explode

//  $str = "Ольшевский Максим      Михайлович"; # Получить отдельно Ф И О. Разделитель является пробел.
//
//     $data = explode(' ', $str); # Трейтий элемент указывает сколько массивов мы должны получить. Зависит от количества пробелов. ну или или.
//
//    print_r($data );
//    echo '<br>';
//    echo '<br>';
//    echo $data[0]; # echo тоже евляется функцией для работы со строками.

////!-----------------------  implode
//
//
//    $data  = [ 'Ольшевский', 'Максим', 'Михайлович'];
//
//    $str = implode(' ', $data); # Из элементов масива собирает строку. В место пробела можем указать любой символ.
//!    // implode = join - редко используется или не используется вообще.
//    echo $str;

////!--------------------- -- trim. удаляет не печатные символы. Табы, пробелы и тд. Используется часто когда получаестся информация от пользователя.

//        $str = "\n\t<p>Ольшевский </p>\n";
//        $str .= "\n<p> Максим Михайлович</p>         .\t\n"; # Точка оператор конкатенации чтобы строка дописывалась а не переписывалась.
//        echo $str;

//            echo trim($str, "\t");
////!      rtrim с права( в конце) + ltrim с лева удаляет = trim. но чаще используется trim.

// show_source(__FILE__); #Выводит на экран весь код созданного файла. не относится к заданию. Не обращаем Внимания.


////!------------------------- md5 и sha1 используются для шифрования паролей. не рекомендуются так как легко взломать.
//// ?не актуально.

//        $str = 'вася';
//        echo md5(md5($str));

////!--------------------------------- nl2br Позволяет сохранять перенос строки.

//        $str = "Hello\nWorld\n";

//        echo $str;
//        echo nl2br($str);

////!------------------------- str_replace  и str_ireplace #  функция замещения.

//         $str = 'Приве! [I] Идем [/i] сегодня в [b] КИНО ! [/b]';

//         $str = str_replace('[b]', '<b>', $str);
//         $str = str_replace('[/b]', '</b>', $str); #Так перечислять не удобно оэтому создаёться массив.

//        $arrOriginal = ['[b]', '[/b]', '[i]','[/i]'];
//        $arrReplase = ['<b>','</b>','<i>','</i>'];

//        $str = str_replace($arrOriginal, $arrReplase, $str);

//        $str = str_ireplace($arrOriginal, $arrReplase, $str);
//         echo  $str;

//!--------------------------- strip_tags() # удаляет теги.

//        $str = 'Приве! <i> Идем </i> сегодня в <b> КИНО ! </b> <script> alert ("Идём ***")</script>';
//        echo  $str;

//        echo strip_tags($str, '<b><i>');


//!-------------------------------- strlen() считает количество байтов в строке.

//        $str = 'Hello';
//        $str .= 'привет!';
//
//        echo strlen($str);

//        echo mb_strlen($str, 'utf-8'); # Подсчёт количества символов в строке. Второй параметр(кодировка) желательно указывать.
////! (mb) мульти байтовая функция.


//!------------------------------------- strpos, mb_strpos. Ищет символ в строке и возвращает его позицию.


//        $str = 'привет, всем!';
//        echo mb_stripos($str, 'в', 5); # Применяется в условиях.


//!------------------------------------- (mb_)  strtoupper и strtolower Переводят текст в верхний и нижний регистр.

//        $str1 = 'здравствуйте';
//        $str2 = 'ЗДРАВСТВУЙТЕ';
//
//        echo mb_strtoupper($str1);
//        echo '<br>';
//        echo mb_strtolower($str2);


//!----------------------------------- (mb_) substr 0 первая позиция. если с конца то идёт с -1.


//            $str1 = 'здравствуйте, здоровья';
//            echo mb_substr($str1,-8,8);


//!----------------------------------- htmlsoecialchars и htmlspecialchars_decode показывает теги не вырезает их. не давая им отработать.

//        $str = 'Приве! <i> Идем </i> сегодня в <b> КИНО ! </b> <script> alert ("Идём ***")</script>';

//        echo htmlspecialchars($str);

//        $str ='Приве! &lt;i&gt; Идем &lt;/i&gt; сегодня в &lt;b&gt; КИНО ! &lt;/b&gt; &lt;script&gt; alert (&quot;Идём ***&quot;)&lt;/script&gt';
//
////            echo htmlspecialchars($str);
//
//              echo htmlspecialchars_decode($str);


//!-------------------------------------- htmlentities
//        $str = 'Приве! <i> Идем </i> сегодня в <b> КИНО ! </b> <script> alert ("Идём ***")</script>';
//
//
//        echo  htmlentities($str);
////!------------------------------- ucfirst

//        $str = 'hello world!';
//        echo ucfirst($str);
//
//
//
//        $str11 = 'HELLO WORLD!';
//        echo ucfirst($str11);
//
//        echo ucfirst(strtolower($str11));


////!------------------------------ ####### wordwrap

//        $str = "a very long. woooooooooooooooooord and something.";
//
//        $str2 = wordwrap($str, 15, "<br>", false);
//
//
//
//      echo ucfirst(wordwrap($str, 15, "<br>", false));
//
//        echo "<br>";
//    echo "<br>";
//    echo "<br>";
//
//
//        echo "$str2";

?>
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


<section style=" display: flex;justify-content: center; margin-top: 15px;max-width: 1170px;">
    <style>
        td {padding: 5px;text-align: center; color: #020375}
    </style>

    <table>
    <?php
    $fromMultiplier = 10;
    $beforeMultiplier = 20;

    for ($firstM = 1; $firstM <= $fromMultiplier; $firstM++) {

        echo '<tr>';

        for ($secondsM = 1; $secondsM <= $beforeMultiplier; $secondsM++) {

            echo  '<td>', $secondsM * $firstM, '||','</td>';
        }

    }

    ?>
        </table>




</section>
</body>
</html>
