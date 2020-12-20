<?php
if ($_REQUEST[admin_password] != 'admin' or $_REQUEST[admin_login] != 'admin')
{
    die("Неверные данные для админки");
}

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<html lang="en">
<head>
    <title>Чекушин Андрей</title>
    <meta content="text/html" charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="Analog-Clock-jsRapClock/jsRapClock.css" />
    <link rel="stylesheet" href="Analog-Clock-jsRapClock/index.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="Analog-Clock-jsRapClock/jsRapClock.js"></script>
    <script src="jq_empty_form.js"></script>

    <script>
        $(document).ready(function(){
            $('#demo1').jsRapClock();
        });

        function go(form_id, php_option){
            document.getElementById('id_php').value = php_option;
            document.getElementById(form_id).submit();
        }

        function open_update_event(form_id, title){
            document.getElementById('id_title').value = title;
            document.getElementById('id_update_php').value = 'update_selected';
            document.getElementById(form_id).submit();
        }

        function insert_check() {
            let form = document.getElementById('insert_form');
            let inputElements = form.getElementsByTagName('input');
            for (let inputElement of inputElements) {
                if (inputElement.value == '')
                    return;
            }
            let btn = document.getElementsByClassName('next')[0];
            btn.classList.remove('disabled');
            document.getElementsByClassName('rf').submit();
        }
    </script>

    <style>
        .lolTable{
            width: 100%;
        }
        label:hover{
            background: #009ac2;
        }
        ul{
            list-style-type: disc;
        }
        #demo1{
            width: 150px;
        }
        td{
            vertical-align: top;
        }
        #form-id{
            padding-top: 200px;
            padding-right: 5px;
        }
        #id_user {
            font-size: 18px;
        }
        .div_text{
            white-space: pre-line;
        }
        label {
            display: inline-block;
            width: 100%;
        }

    </style>
</head>
<body background="images/background.jpg">
<table border="5" width="1400px" align="center">
    <tr>
        <td id="header" colspan="2">
            <div>
                <img src="images/header.jpg" width="100%">
            </div>
        </td>
    </tr>
    <tr>
        <td id="menu">
            <div id="id_user">
                <?php
                echo 'Вы вошли как Admin';
                ?>
            </div>
            <div id="demo1"></div>
            <form method="post" action="admin_panel.php" id="form-id_menu">
                <div>
                    <input type="hidden" name="admin_login" value="admin">
                    <input type="hidden" name="admin_password" value="admin">
                    <input id="id_php" type="hidden" name="php">
                    <ol class = sp>
                        <li><a href="index.php">Вернуться на сайт</a></li>
                        <li>Админка
                            <ul>
                                <li><label onclick="go('form-id_menu', 'insert');">Добавить</label><br></li>
                                <li><label onclick="go('form-id_menu', 'delete');">Удалить</label><br></li>
                                <li><label onclick="go('form-id_menu', 'update');">Изменить</label><br></li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </form>
        </td>
        <td id="content">

            <?php
            $php = $_POST[php] ? $_POST[php] : 'insert';
            include_once "phpCode/$php.php";
            ?>
        </td>
    </tr>
    <tr>
        <td id="bottom" colspan="2">
            <div align="right">
                &copy; Андрей Чекушин БСБО-05-18
            </div>
        </td>
    </tr>
</table>

</body>
</html>
