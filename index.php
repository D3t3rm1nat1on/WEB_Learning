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
		<script src="jq.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="/Analog-Clock-jsRapClock/jsRapClock.js"></script>

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
        </style>
	</head>
    <body background="images/background.jpg">
		<div id="demo1" ></div>


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
                    <form method="post" action="index.php" id="form-id">
                        <div>
                            <input id="php" type="hidden" name="php">
                            <ol class = sp>
                                <li><label onclick="go('form-id', '1');">На главную</label><br></li>
                                <li><label onclick="go('form-id', '2');">Вывести только новогоднюю коллекцию</label><br></li>
                                <li><label onclick="go('form-id', '3');">Товары для взрослых</label><br></li>
                                <li><label onclick="go('form-id', '4');">Отсортироватьт по названию</label><br></li>
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
                        include_once "phpCode/$_POST[php].php";
                        ?>
                    </table>
				</td>
			</tr>
			<tr>
				<td id="bottom" colspan="2">
					<div>
						BOTTOM
					</div>
				</td>
			</tr>
		</table>

	</body>
</html>
