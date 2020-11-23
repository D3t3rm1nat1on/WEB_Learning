<?php
    include_once '/functions/get_tovar.php';
    $groups = get_groups();

    print '</table>';
    echo '<pre>';
    print_r($groups);
    echo '</pre>';
    echo '<br>';
?>

