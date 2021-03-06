<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход в админку</title>
    <style>
        table{
            font-family: "Andale Mono";
            padding: 20px;
            border: solid cadetblue;
        }

        .g1{
            font-size: 24px;
        }

        input{
            border-style: dot-dot-dash;
            font-size: 15px;
            height: 40px;
            width: 100%
        }

        span.g_enter{
            font-size: 20px;
        }

        a{
            text-decoration-line: none;
        }

        input.next{
            color: white;
            font-size: 20px;
            width: min-content;
            background-color: cornflowerblue;
        }

        td{
            padding: 10px;
        }

    </style>
    <script src="jq.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="jq_empty_form.js"></script>
    <script>

        function user_check(){
            let name = document.getElementById('id_name')
            let pass = document.getElementById('id_pass')
            if (name.value == '' || pass.value == '')
                return;
            let btn = document.getElementById('id_button')
            btn.classList.remove('disabled')
            document.getElementsByClassName('rf').submit();
        }
    </script>
</head>
<body background="images/background.jpg">
<div class="form_box">
    <form class="rf" action="admin_panel.php" method="post">
        <table align="center" width="600" border="0" bgcolor="#d0f5ff">
            <tr>
                <td colspan="2"><span class="g1">Вход в админку</span></td>
            </tr>
            <tr>
                <td colspan="2"><input id="id_name" class="rfield" type="text" name="admin_login" placeholder="Логин"></td>
            </tr>
            <tr>
                <td colspan="2"><input id="id_pass" class="rfield" type="password" name="admin_password" placeholder="Пароль"></td>
            </tr>
            <tr>
                <td align="left"><input id="id_button" class="next btn_submit disabled" type="button" value="Войти в админку" onclick="user_check();"></td>
                <td align="right"><span class="g_enter"><a href="index.php">Вернуться на сайт</a></span></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>