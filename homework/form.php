<style>
    table{
        font-family: "Andale Mono";
        padding: 20px;
        border: solid cadetblue;
    }

    input{
        border-style: dot-dot-dash;
        font-size: 15px;
        height: 40px;
        width: 100%
    }

    a{

        text-decoration-line: none;
    }

    td{
        padding: 10px;
    }
</style>

<form action="form.php" method="get">
    <table>
    <?php
        for ($i = 1; $i <= 10; $i++){
            echo '<tr>';
            echo '<td><input type="text" name="q',$i,'" placeholder="Поле ',$i,'"></td>';
            echo '<td><input type="radio" name="r" value="r',$i,'" </td>';
            echo '</tr>';
        }
    ?>
        <tr><td colspan="2"><input type="submit" width="full"></td></tr>
    </table>
</form>
