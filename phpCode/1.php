
    <?php
    foreach ($groups as $group => $goods) {
        echo '<tr><td colspan="5" bgcolor="#faebd7">', $group, '</td></tr>';
        foreach ($goods as $product) {
            echo '<tr>';
            echo '<td>' . $product['name'] . '</td>';
            echo '<td>' . $product['price'] . '</td>';
            echo '<td>' . $product['amount'] . '</td>';
            echo '<td>' . $product['collection'] . '</td>';
            echo '<td>' . $product['age_limit'] . '</td>';
            echo '</tr>';
        }
    }