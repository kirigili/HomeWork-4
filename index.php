<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo '<b><br />Задание 1</b><br /><br />';
        $str = 'london is the capital of great britain';
        echo '<b>Преобразуем в верхний регистр первый символ каждого слова в строке:</b><br /><br />';
        echo ucwords($str);
        echo '<br /><br /><hr />';

        ///

        echo '<b><br />Задание 2</b><br /><br />';
        $str = 'html <b>css</b> php';
        echo '<b>Удаляем теги из строки:</b><br /><br />';
        echo strip_tags($str);
        echo '<br /><br /><hr />';
        
        ///

        echo '<b><br />Задание 3</b><br /><br />';
        $str = 'london is the capital of great britain';        
        echo '<b>Перемешиваем символы строки в случайном порядке:</b><br /><br /> ';
        echo str_shuffle($str);
        echo '<br /><br /><hr />';
        
        ///

        echo '<b><br />Задание 4</b><br /><br />';
        echo '<b>Количество дней в текущем месяце:</b><br /><br /> ';
        echo date('t');
        echo '<br /><br /><hr />';
        
        ///

        echo '<b><br />Задание 5</b><br /><br />';
        echo date('Y-m-d', mktime(0, 0, 0, 12, 31, 2025)) . '<br /><br />';
        echo date('d.m.Y', mktime(0, 0, 0, 12, 31, 2025)) . '<br /><br />';
        echo date('d.m.y H:i:s', mktime(12, 59, 59, 12, 31, 2025));
        echo '<br /><br /><hr />';
                
        ///

        echo '<b><br />Задание 6</b><br /><br />';
        $date = '2025-12-31';
        echo date('d.m.Y', strtotime("$date + 2 day")) . '<br /><br />';
        echo date('d.m.Y', strtotime("$date + 1 month 3 days")) . '<br /><br />';
        echo date('d.m.Y', strtotime("$date + 1 year")) . '<br /><br />';
        echo date('d.m.Y', strtotime("$date - 3 day"));
        echo '<br /><br /><hr />';
        
        ///

        echo '<b><br />Задание 7</b><br /><br />';
        $str = '1a2b3c4b5d6e7f8g9h0';
        $str = preg_replace('/\d/', '', $str);
        echo '<b>Удаляем все цифры из строки:</b><br /><br /> ' . $str;
        echo '<br /><br /><hr />';
                
        ///

        echo '<b><br />Задание 8</b><br /><br />';
        $arr_num = [4, -2, 5, 19, -130, 0, 10];
        echo '<b>Минимальное число:</b> ' . min($arr_num) . '<br />';
        echo '<b>Максимальное число:</b> ' . max($arr_num);
        echo '<br /><br /><hr />';
        
        ///

        echo '<b><br />Задание 9</b><br /><br />';
        echo '<b>Случайное число:</b> ' . mt_rand(0, 100);
        echo '<br /><br /><hr />';
                
        ///

        echo '<b><br />Задание 10</b><br /><br />';
        $arr = [1 => 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье',];
        echo '<b>Сегодня:</b> ' . $arr[6];
        echo '<br /><br /><hr />';
        
        ///

        echo '<b><br />Задание 11</b><br /><br />';
        $arr = [[1, 2, 3], [4, 5], [6]];
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++){
            $sum += $arr[$i][$j];
            }
        }
        echo '<b>Сумма элементов массива:</b> ' . $sum;
        echo '<br /><br /><hr />';
                
        ///

        echo '<b><br />Задание 12</b><br /><br />';
        $arr = array(1,1,1,2,2,2,3,3);
        $result = [];
        foreach ($arr as $r){
          if ( !$result[$r] ){
            $result[$r] = $r;
            echo $result[$r] . ' <br /> ';
          }
        }
        echo '<br /><br /><hr />';
        
        ///

        echo '<b><br />Задание 13</b><br /><br />';
        $menu = array(
            'Home' => 'home.php',
            'About' => 'about.php',
            'Services' => 'services.php',
            'Catalog' => 'catalog.php',
            'Contacts' => 'contacts.php',
        );
     
        foreach($menu as $key => $value){
            echo "<a href=" . $value .">" . $key . "</a> ";
        }
    
        echo '<br /><br /><hr />';
                
        ///

        ?>
        <div style="background-color: black;">
        <?php
        echo '<p style=\'color: white\'><b><br />Задание 14</b><br /><br /></p>';
        $a = rand(0, 100);
        $b = rand(0, 100);
        for ($i=1; $i<=10; $i++){
            echo "<div style=\"width: $a; height: $b; margin:$a; padding: $b; top:$a; background-color: red;\"></div>";
        }
        echo '<br /><br /><hr />';
        ?>
        </div>

        <?php

        ///

        /*echo '<b><br />Задание 15</b><br /><br />';
        $str = '1234567890';
        $arr = str_split($str,1,2);
        print_r($arr);
        echo '<br /><br /><hr />';*/
                
        ///

        echo '<b><br />Задание 16</b><br /><br />';
        echo '<br /><br /><hr />';
                
        ///

        echo '<b><br />Задание 17</b><br /><br />';
        function random_color(){  
            return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
           }
        echo random_color();
        echo '<br /><br /><hr />';
                
        ///

        echo '<b><br />Задание 18</b><br /><br />';
        $str = '332 441 550';
        echo preg_replace('#(\d)\1#i', '!', $str);
        echo '<br /><br /><hr />';
                
        ///

        /*echo '<b><br />Задание 19</b><br /><br />';
        function get_numberPhone($number){
            $number_phone = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;
            if ($number.match($number_phone)){
                return true;
            } else{
                echo 'Введен некорректный номер телефона';
                return false;
            }
        }
        echo get_numberPhone($number);
        echo '<br /><br /><hr />';
                
        ///

        echo '<b><br />Задание 20</b><br /><br />';
        echo '<br /><br /><hr />';*/
    ?>    
        
    
    
</body>
</html>
