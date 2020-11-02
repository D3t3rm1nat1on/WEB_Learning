<style>
    td{
        padding: 10px;
    }
</style>
<table border="1">
    <?php
        $matrix_size = 9;
        echo "<tr><td bgcolor='#7fffd4' colspan='$matrix_size'>1</td></tr>";
        for ($i = 1; $i < $matrix_size; $i++) {
            #echo "<tr><td bgcolor='#f0e68c' rowspan=", $matrix_size - $i, ">$i</td><td bgcolor='#7fffd4' colspan=", ($matrix_size - $i), ">",$i + 1,"</td></tr>";
            $temp = $matrix_size - $i;
            $value = $i + 1;
            echo "<tr><td bgcolor='#f0e68c' rowspan=$temp>$i</td><td bgcolor='#7fffd4' colspan=$temp>$value</td></tr>";
        }
    ?>
</table>
<br>

<style>
    td{
        padding: 10px;
    }
</style>
<table border="1">
    <?php
    for($i=0; $i<$matrix_size; $i++)
    {?>
        <tr>
            <?php

            for($j=0; $j<$matrix_size; $j++ )
            {

                $col='black';
                if($j-$i<0 && $j<$matrix_size-$i-1) $col = 'yellow';
                if($j-$i<0 && $j>$matrix_size-$i-1) $col = 'brown';
                if($j-$i>0 && $j<$matrix_size-$i-1) $col = 'blue';
                if($j-$i>0 && $j>$matrix_size-$i-1) $col = 'orange';
                if ($j==$i) $col='red';
                if ($j==$matrix_size-$i-1) $col='green';

                echo "<td bgcolor=$col></td>";
            }?>
        </tr>
    <?php } ?>
</table>
<br>
<table>
    <?php
    $on_right = true;
    $step = (255 / ($matrix_size * $matrix_size));
//    echo 'step = ', $step, '<br>';
    $red_color = 0xff;

    $mas = array();
    $len = $matrix_size * $matrix_size;
    for ($i = 0; $i < $len; $i++){
        $mas[$i] = $red_color;
        $red_color -= $step;
    }


//    echo 'mas:<br>',join('&nbsp&nbsp', $mas);
//    echo '<br>';


    $counter = 0;
    $res[0][0] = 0;
    $flag = true;
    for ($i = 0; $i < $matrix_size; $i++) {
        if ($flag) {
//            echo 'right<br>';
            for ($j = 0; $j < $matrix_size; $j++) {
                $res[$i][$j] = $mas[$counter];
//                echo $counter, ' ', $mas[$counter], ' ';
//                echo "res[$i][$j] = ", $res[$i][$j], "<br>";
                $counter++;
            }
            $flag = false;
        } else {
//            echo 'left<br>';
            for ($j = $matrix_size - 1; $j >= 0; $j--) {
                $res[$i][$j] = $mas[$counter];
//                echo $counter, ' ', $mas[$counter], ' ';
//                echo "res[$i][$j] = ", $res[$i][$j], "<br>";
                $counter++;
            }
            $flag = true;
        }

    }

//    echo '$res[0][0] = ',$res[0][0],'<br>';
//    echo 'res:<br>';
//    foreach ($res as $re) {
//        echo join('&nbsp&nbsp', $re);
//        echo '<br>';
//    }

    for ($i = 0; $i < $matrix_size; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $matrix_size; $j++) {
            echo '<td bgcolor=0', dechex($res[$i][$j]),'0000>',dechex($res[$i][$j]),'0000','</td>';
        }
        echo '</tr>';
    }
    ?>
</table>
