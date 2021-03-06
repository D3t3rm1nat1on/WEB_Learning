<?php
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

    <script>
        $(document).ready(function(){
            $('#demo1').jsRapClock();
        });

        function go(form_id, php_option){
            document.getElementById('id_php').value = php_option;
            document.getElementById(form_id).submit();
        }

        function show_where(column, search, form_id){
            document.getElementById('id_search').value = 'WHERE `' + column +  '`="' + search + '"';
            go(form_id, 'search');
        }

        function show_title(form_id, title){
            document.getElementById('id_title').value = title;
            go(form_id, 'show title');
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
                $username = $_POST[username] ? $_POST[username] : 'Гость';
                echo 'Вы вошли как '.$username;
                ?>
            </div>
            <div id="demo1"></div>
            <form method="post" action="index.php" id="form-id_menu">
                <div>
                    <input id="id_php" type="hidden" name="php">
                    <input type="hidden" name="username" value=<?php echo $username?>>
                    <ol class = sp>
                        <li>Просмотр
                            <ul>
                                <li><label onclick="go('form-id_menu', '1');">На главную</label><br></li>
                                <li><label onclick="go('form-id_menu', '2');">Отсортировать по названию</label><br></li>
                                <li><label onclick="go('form-id_menu', '3');">Отсортировать по возрасту</label><br></li>

                            </ul>
                        </li>
                        <li>
                            <a href="admin_login.php">Админка</a>
                        </li>
                    </ol>
                </div>
            </form>
        </td>
        <td id="content">

            <?php
            include_once 'functions/show.php';

            $php = $_POST[php] ? $_POST[php] : '1';
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
