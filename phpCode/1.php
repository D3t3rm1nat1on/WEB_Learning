<?php
if ($_POST[title])
    show_stat($_POST[title]);
else
    show_list($_POST[where_string]);