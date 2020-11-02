<style>
    td{
        padding: 10px;
    }
</style>
<table border="1">
    <?php
        $matrix_size = 10;
        echo "<tr><td bgcolor='#7fffd4' colspan='$matrix_size'>1</td></tr>";
        for ($i = 1; $i < $matrix_size; $i++) {
            #echo "<tr><td bgcolor='#f0e68c' rowspan=", $matrix_size - $i, ">$i</td><td bgcolor='#7fffd4' colspan=", ($matrix_size - $i), ">",$i + 1,"</td></tr>";
            $temp = $matrix_size - $i;
            $value = $i + 1;
            echo "<tr><td bgcolor='#f0e68c' rowspan=$temp>$i</td><td bgcolor='#7fffd4' colspan=$temp>$value</td></tr>";
        }
    ?>
</table>