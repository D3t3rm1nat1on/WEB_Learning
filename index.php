<?php #init
include_once 'functions/api.php';
$groups = get_groups();
?>
<?// echo "<pre>"; print_r($_POST); echo "</pre>";?>
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

			function go(id, php){
			    document.getElementById('php').value = php;
                document.getElementById(id).submit();
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
                    <form method="post" action="index.php" id="form-id">
                        <div>
                            <input id="php" type="hidden" name="php">
                            <input id="php" type="hidden" name="username" value=<?php echo $username?>>
                            <ol class = sp>
                                <li>Просмотр
                                    <ul>
                                        <li><label onclick="go('form-id', '1');">На главную</label><br></li>
                                        <li><label onclick="go('form-id', '2');">Вывести только новогоднюю коллекцию</label><br></li>
                                        <li><label onclick="go('form-id', '3');">Товары для взрослых</label><br></li>
                                        <li><label onclick="go('form-id', '4');">Отсортироватьт по названию</label><br></li>

                                    </ul>
                                </li>
                                <li>Пользователь
                                    <ul>
                                        <li><a href="login.html">Войти как пользователь</a></li>
                                        <li><a href="registration.html">Зарегестрироваться</a></li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </form>
				</td>
				<td id="content">
                    <table border="1" bgcolor="#ffebcd" class="lolTable">
                        <tr><td colspan="5" bgcolor="#bdb76b">Прайс лист</td></tr>
                        <tr bgcolor="#f0e68c">
                            <td>Наименование</td>
                            <td>Цена</td>
                            <td>Наличие</td>
                            <td>Коллекция</td>
                            <td>Возрастное ограничение</td>
                        </tr>
                        <?php
                        $php = $_POST[php] ? $_POST[php] : '1';
                        include_once "phpCode/$php.php";
                        ?>
                    </table>
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
