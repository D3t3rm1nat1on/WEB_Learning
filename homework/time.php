<?php
    $chislo[1] = 'первое';
    $chislo[2] = 'второе';
    $chislo[3] = 'третье';
    $chislo[4] = 'четвертое';
    $chislo[5] = 'пятое';
    $chislo[6] = 'шестое';
    $chislo[7] = 'седьмое';
    $chislo[8] = 'восьмое';
    $chislo[9] = 'девятое';
    $chislo[10] = 'десятое';
    $chislo[11] = 'одинадцатое';
    $chislo[12] = 'двенадцатое';
    $chislo[13] = 'тринадцатое';
    $chislo[14] = 'четырнадцатое';
    $chislo[15] = 'пятнадцатое';
    $chislo[16] = 'шестнадцатое';
    $chislo[17] = 'семнадцатое';
    $chislo[18] = 'восемнадцатое';
    $chislo[19] = 'девятнадцатое';
    $chislo[20] = 'двадцатое';
    $chislo[30] = 'тридцатое';
    $desatok[2] = 'двадцать ';
    $desatok[3] = 'тридцать ';

    $day= array('Воскресенье','Понедельник','Вторник','Среда','Четверг','Пятница','Суббота');
    $date = getdate();
    $str = 'Сегодня %s, %s %s, %s';
    $time = $date['hours'].':'.$date['minutes'].':'.$date['seconds'];
    if (array_key_exists($date['mday'], $chislo)){
        $a = $chislo[$date['mday']];
    }
    else {
        $a = $desatok[floor($date['mday'] / 10)] . $chislo[$date['mday'] % 10];
    }
    echo sprintf($str, $day[$date['wday']], $a, $date['year'], $time), '<br>';
    #echo print_r(getdate()), '<br>';
?>
