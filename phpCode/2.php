<?php
    foreach ($groups as $group => $goods) {
        $array = array();
        foreach ($goods as $product){
            if ($product['collection'] == 'new year'){
                array_push($array, $product);
            }
        }
        if(count($array) > 0) {
            echo '<tr><td colspan="5" bgcolor="#faebd7">',$group ,'</td></tr>';
            foreach ($array as $product) {
                echo '<tr>';
                echo '<td>'.$product['name'].'</td>';
                echo '<td>'.$product['price'].'</td>';
                echo '<td>'.$product['amount'].'</td>';
                echo '<td>'.$product['collection'].'</td>';
                echo '<td>'.$product['age_limit'].'</td>';
                echo '</tr>';
            }
        }

    }